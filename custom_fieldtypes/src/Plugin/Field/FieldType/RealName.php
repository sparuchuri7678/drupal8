<?php

/**
 * @file
 * Contains \Drupal\custom_fieldtypes\Plugin\Field\FieldType\RealName.
 */

namespace Drupal\custom_fieldtypes\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'realname' field type.
 *
 * @FieldType(
 * id = "realname",
 * label = @Translation("Real name"),
 * description = @Translation("This field stores a first and
  last name."),
 * category = @Translation("General"),
 * default_widget = "realname_default",
 * default_formatter = "realname_one_line"
 * )
 */
class RealName extends FieldItemBase {

  /**
   * {@inheritdoc}
   * Using this we are defining fields for our custom field type(RealName).
   */
  public static function schema(\Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'first_name' => array(
          'description' => 'First name.',
          'type' => 'varchar',
          'length' => '255',
          'not null' => TRUE,
          'default' => '',
        ),
        'last_name' => array(
          'description' => 'Last name.',
          'type' => 'varchar',
          'length' => '255',
          'not null' => TRUE,
          'default' => '',
        ),
      ),
      'indexes' => array(
        'first_name' => array('first_name'),
        'last_name' => array('last_name'),
      ),
    );
  }

  /**
   * {@inheritdoc}
   * Using this we are defining data type for our custom fields
   */
  public static function propertyDefinitions(\Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition) {
    $properties['first_name'] = \Drupal\Core\TypedData\DataDefinition::create('string')->setLabel(t('First name'));
    $properties['last_name'] = \Drupal\Core\TypedData\DataDefinition::create('string')->setLabel(t('Last name'));
    return $properties;
  }

}
