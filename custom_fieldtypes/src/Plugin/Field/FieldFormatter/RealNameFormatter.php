<?php

/**
 * @file
 * Contains \Drupal\custom_fieldtypes\Plugin\Field\FieldFormatter\  RealNameFormatter
 */

namespace Drupal\custom_fieldtypes\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'realname_one_line' formatter.
 *
 * @FieldFormatter(
 * id = "realname_one_line",
 * label = @Translation("Real name (one line)"),
 * field_types = {
 * "realname"
 * }
 * )
 */
class RealNameFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   * Once entity(node,user,comments) is saved how we see the field data, will be represeneted by this function
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];
    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#markup' => $this->t('@first @last', array(
          '@first' => $item->first_name,
          '@last' => $item->last_name,
            )
        ),
      );
    }
    return $element;
  }

}
