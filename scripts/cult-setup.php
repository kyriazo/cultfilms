<?php

/**
 * @file
 * Creates the "Film" content type, its fields and the two launch films.
 * Run with: drush php:script scripts/cult-setup.php
 * Safe to re-run: it skips anything that already exists.
 */

use Drupal\Core\File\FileExists;
use Drupal\Core\File\FileSystemInterface;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;

$etm = \Drupal::entityTypeManager();

// 1. Content type.
if (!NodeType::load('film')) {
  $type = NodeType::create([
    'type' => 'film',
    'name' => 'Film',
    'description' => 'A Cult film stock shown on the landing page.',
  ]);
  $type->setDisplaySubmitted(FALSE);
  $type->save();
  echo "Created content type: film\n";
}

// Body field. node_add_body_field() is deprecated and assumes the shared
// node.body storage already exists, which it doesn't on a site with no other
// node types, so create both here.
if (!FieldStorageConfig::loadByName('node', 'body')) {
  FieldStorageConfig::create([
    'field_name' => 'body',
    'entity_type' => 'node',
    'type' => 'text_with_summary',
    'cardinality' => 1,
    'persist_with_no_fields' => TRUE,
  ])->save();
}
if (!FieldConfig::loadByName('node', 'film', 'body')) {
  FieldConfig::create([
    'field_name' => 'body',
    'entity_type' => 'node',
    'bundle' => 'film',
    'label' => 'Description',
    'settings' => ['display_summary' => FALSE, 'allowed_formats' => []],
  ])->save();
  \Drupal::service('entity_display.repository')->getFormDisplay('node', 'film', 'default')
    ->setComponent('body', ['type' => 'text_textarea_with_summary', 'weight' => 0])
    ->save();
  \Drupal::service('entity_display.repository')->getViewDisplay('node', 'film', 'default')
    ->setComponent('body', ['label' => 'hidden', 'type' => 'text_default', 'weight' => 0])
    ->save();
  echo "Created field: body\n";
}

// 2. Fields: name => [storage type, label, widget, storage settings, field settings].
$fields = [
  'field_code' => ['string', 'Code (e.g. 400T)', 'string_textfield', [], []],
  'field_iso' => ['integer', 'ISO', 'number', [], []],
  'field_balance' => ['string', 'Balance', 'string_textfield', [], []],
  'field_exposures' => ['integer', 'Exposures', 'number', [], []],
  'field_process' => ['string', 'Process', 'string_textfield', [], []],
  'field_price' => ['string', 'Price (as shown, e.g. €14)', 'string_textfield', [], []],
  'field_shop_url' => ['link', 'Shop link', 'link_default', [], ['link_type' => 16, 'title' => 0]],
  'field_label' => ['image', 'Label artwork', 'image_image', ['uri_scheme' => 'public'], ['file_directory' => 'films', 'alt_field_required' => TRUE, 'file_extensions' => 'png jpg jpeg webp']],
  'field_weight' => ['integer', 'Order on page (lower = first)', 'number', [], []],
];

$form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', 'film', 'default');
$view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', 'film', 'default');
$w = 1;
foreach ($fields as $name => [$type, $label, $widget, $storage_settings, $field_settings]) {
  if (!FieldStorageConfig::loadByName('node', $name)) {
    FieldStorageConfig::create([
      'field_name' => $name,
      'entity_type' => 'node',
      'type' => $type,
      'settings' => $storage_settings,
      'cardinality' => 1,
    ])->save();
  }
  if (!FieldConfig::loadByName('node', 'film', $name)) {
    FieldConfig::create([
      'field_name' => $name,
      'entity_type' => 'node',
      'bundle' => 'film',
      'label' => $label,
      'settings' => $field_settings,
    ])->save();
    echo "Created field: $name\n";
  }
  $form_display->setComponent($name, ['type' => $widget, 'weight' => $w]);
  $view_display->setComponent($name, ['label' => 'inline', 'weight' => $w]);
  $w++;
}
$form_display->save();
$view_display->save();

// 3. Launch films.
$theme_images = \Drupal::service('extension.list.theme')->getPath('cult') . '/images';
$fs = \Drupal::service('file_system');
$dir = 'public://films';
$fs->prepareDirectory($dir, FileSystemInterface::CREATE_DIRECTORY | FileSystemInterface::MODIFY_PERMISSIONS);

$make_file = function ($filename) use ($fs, $theme_images, $dir) {
  $replace = class_exists(FileExists::class) ? FileExists::Replace : FileSystemInterface::EXISTS_REPLACE;
  $uri = $fs->copy(DRUPAL_ROOT . '/' . $theme_images . '/' . $filename, $dir . '/' . $filename, $replace);
  $file = File::create(['uri' => $uri, 'status' => 1, 'uid' => 1]);
  $file->setPermanent();
  $file->save();
  return $file;
};

$films = [
  [
    'title' => 'euphoria',
    'field_code' => '400T',
    'field_iso' => 400,
    'field_balance' => 'Tungsten',
    'field_exposures' => 36,
    'field_process' => 'C-41',
    'field_price' => '[PRICE]',
    'image' => 'euphoria.jpg',
    'alt' => 'Euphoria 400T cassette label',
    'body' => '[Short description — e.g. a tungsten-balanced stock for night streets, neon and interiors.]',
    'field_weight' => 1,
  ],
  [
    'title' => 'DUNE',
    'field_code' => '100R',
    'field_iso' => 100,
    'field_balance' => '[Daylight?]',
    'field_exposures' => 24,
    'field_process' => 'C-41',
    'field_price' => '[PRICE]',
    'image' => 'dune.jpg',
    'alt' => 'Dune 100R cassette label',
    'body' => '[Short description — e.g. a fine-grain slow stock for bright sun, deserts and skin tones.]',
    'field_weight' => 2,
  ],
];

$storage = $etm->getStorage('node');
foreach ($films as $f) {
  $existing = $storage->loadByProperties(['type' => 'film', 'title' => $f['title']]);
  if ($existing) {
    // Backfill the description on films created before the body field existed.
    $node = reset($existing);
    if ($node->get('body')->isEmpty()) {
      $node->set('body', ['value' => '<p>' . $f['body'] . '</p>', 'format' => 'basic_html'])->save();
      echo "Film exists, added description: {$f['title']}\n";
    }
    else {
      echo "Film exists, skipped: {$f['title']}\n";
    }
    continue;
  }
  $file = $make_file($f['image']);
  $node = Node::create([
    'type' => 'film',
    'title' => $f['title'],
    'uid' => 1,
    'status' => 1,
    'promote' => 0,
    'body' => ['value' => '<p>' . $f['body'] . '</p>', 'format' => 'basic_html'],
    'field_code' => $f['field_code'],
    'field_iso' => $f['field_iso'],
    'field_balance' => $f['field_balance'],
    'field_exposures' => $f['field_exposures'],
    'field_process' => $f['field_process'],
    'field_price' => $f['field_price'],
    'field_weight' => $f['field_weight'],
    'field_label' => ['target_id' => $file->id(), 'alt' => $f['alt']],
  ]);
  $node->save();
  echo "Created film: {$f['title']}\n";
}

// 4. Site name and permissions.
\Drupal::configFactory()->getEditable('system.site')->set('name', 'Cult Films')->save();
echo "Done.\n";
