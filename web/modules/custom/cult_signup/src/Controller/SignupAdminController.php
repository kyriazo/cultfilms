<?php

namespace Drupal\cult_signup\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Response;

/**
 * Lists and exports B&W signup emails.
 */
class SignupAdminController extends ControllerBase {

  /**
   * Fetches all rows, newest first.
   */
  protected function rows() {
    return \Drupal::database()->select('cult_signup', 's')
      ->fields('s', ['email', 'created'])
      ->orderBy('created', 'DESC')
      ->execute()
      ->fetchAll();
  }

  /**
   * Admin list.
   */
  public function list() {
    $formatter = \Drupal::service('date.formatter');
    $rows = [];
    foreach ($this->rows() as $r) {
      $rows[] = [$r->email, $formatter->format($r->created, 'short')];
    }
    return [
      'export' => [
        '#markup' => '<p>' . Link::fromTextAndUrl($this->t('Download CSV'), Url::fromRoute('cult_signup.export'))->toString() . '</p>',
      ],
      'table' => [
        '#type' => 'table',
        '#header' => [$this->t('Email'), $this->t('Signed up')],
        '#rows' => $rows,
        '#empty' => $this->t('No signups yet.'),
      ],
      '#cache' => ['max-age' => 0],
    ];
  }

  /**
   * CSV download.
   */
  public function export() {
    $out = fopen('php://temp', 'r+');
    fputcsv($out, ['email', 'signed_up']);
    foreach ($this->rows() as $r) {
      fputcsv($out, [$r->email, date('c', $r->created)]);
    }
    rewind($out);
    $csv = stream_get_contents($out);
    fclose($out);
    return new Response($csv, 200, [
      'Content-Type' => 'text/csv; charset=utf-8',
      'Content-Disposition' => 'attachment; filename="bw-signups.csv"',
    ]);
  }

}
