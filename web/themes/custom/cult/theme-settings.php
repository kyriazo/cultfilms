<?php

/**
 * @file
 * Theme settings for Cult: editable landing-page copy and contact details.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function cult_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state, $form_id = NULL) {
  $form['cult'] = [
    '#type' => 'details',
    '#title' => t('Cult landing page'),
    '#open' => TRUE,
    '#weight' => -50,
  ];
  $text = [
    'shop_url' => [t('Shop URL'), 'url_text'],
    'hero_kicker' => [t('Hero small line'), 'textfield'],
    'hero_intro' => [t('Hero intro'), 'textarea'],
    'about_text' => [t('About text'), 'textarea'],
    'bw_text' => [t('Black & white section text'), 'textarea'],
    'bw_edge' => [t('Black & white edge line'), 'textfield'],
    'contact_email' => [t('Contact email'), 'textfield'],
    'instagram_handle' => [t('Instagram handle'), 'textfield'],
    'instagram_url' => [t('Instagram URL'), 'textfield'],
    'location' => [t('Based in'), 'textfield'],
  ];
  foreach ($text as $key => [$title, $type]) {
    $form['cult'][$key] = [
      '#type' => $type === 'url_text' ? 'textfield' : $type,
      '#title' => $title,
      '#default_value' => theme_get_setting($key, 'cult'),
    ];
  }
  $form['cult']['show_strips'] = [
    '#type' => 'checkbox',
    '#title' => t('Show film-edge (sprocket) strips'),
    '#default_value' => theme_get_setting('show_strips', 'cult'),
  ];
}
