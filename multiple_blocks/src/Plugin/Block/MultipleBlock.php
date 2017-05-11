<?php

/**
 * @file
 * Contains \Drupal\multiple_blocks\Plugin\Block\MultipleBlock.
 */

namespace Drupal\multiple_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Custom block.
 *
 * @Block(
 *   id = "multiple_block",
 *   admin_label = @Translation("Multiple Blocks"),
 *   category = @Translation("Custom"),
 *   deriver = "Drupal\multiple_blocks\Plugin\Derivative\MultipleBlock"
 * )
 */
class MultipleBlock extends BlockBase {

  /**
   * Build the content for block.
   */
  public function build() {
    $block_id = $this->getDerivativeId();
    $build = array(
      '#markup' => multiple_blocks_build_block_content($block_id),
    );
    return $build;
  }

}
