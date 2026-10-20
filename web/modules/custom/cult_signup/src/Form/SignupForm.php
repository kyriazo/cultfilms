<?php

namespace Drupal\cult_signup\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * "Notify me" email signup for the black & white launch.
 */
class SignupForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cult_signup_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#attributes']['class'][] = 'cult-signup';
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#required' => TRUE,
      '#attributes' => [
        'placeholder' => 'you@example.com',
        'autocomplete' => 'email',
      ],
    ];
    $form['actions'] = ['#type' => 'actions'];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Notify me'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $email = mb_strtolower(trim($form_state->getValue('email')));
    $db = \Drupal::database();
    $exists = $db->select('cult_signup', 's')
      ->fields('s', ['id'])
      ->condition('email', $email)
      ->execute()
      ->fetchField();
    if (!$exists) {
      $db->insert('cult_signup')
        ->fields(['email' => $email, 'created' => \Drupal::time()->getRequestTime()])
        ->execute();
    }
    $this->messenger()->addStatus($this->t("Thanks — we'll email you when the black & white film drops."));
    $form_state->setRedirect('<front>', [], ['fragment' => 'bw']);
  }

}
