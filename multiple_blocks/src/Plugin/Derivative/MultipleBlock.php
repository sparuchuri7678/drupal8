<?php

/**
 * @file
 * Contains \Drupal\multiple_blocks\Plugin\Derivative\MultipleBlock.
 */

namespace Drupal\multiple_blocks\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\language\ConfigurableLanguageManagerInterface;

class MultipleBlock extends DeriverBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    $myblocks = array(
      'multiple_blocks_block_first' => t('Block First'),
      'multiple_blocks_block_second' => t('Block Second'),
    );
    foreach ($myblocks as $block_id => $block_label) {
      $this->derivatives[$block_id] = $base_plugin_definition;
      $this->derivatives[$block_id]['admin_label'] = $block_label;
    }
    return $this->derivatives;
  }
  
  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
