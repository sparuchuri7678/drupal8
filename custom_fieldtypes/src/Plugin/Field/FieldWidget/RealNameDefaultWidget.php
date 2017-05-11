<?php

/**
 * @file
 * Contains \Drupal\ta_user\Plugin\Field\FieldWidget\RealNameDefaultWidget
 */

namespace Drupal\custom_fieldtypes\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'realname_default' widget.
 *
 * @FieldWidget(
 * id = "realname_default",
 * label = @Translation("Real name"),
 * field_types = {
 *   "realname"
 * }
 * )
 */
class RealNameDefaultWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   * Once custom field is added to entity(node,user,comments), when we edit the entity what will be displayed, represented by this function
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['first_name'] = array(
      '#type' => 'textfield',
      '#title' => t('First name'),
      '#default_value' => '',
      '#size' => 25,
      '#required' => $element['#required'],
    );
    $element['last_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Last name'),
      '#default_value' => '',
      '#size' => 25,
      '#required' => $element['#required'],
    );
    return $element;
  }

}
