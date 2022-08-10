<?php

namespace Drupal\forcontu_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block (
 *   id = "forcontu_block_simple_block",
 *   admin_label = @Translation ("Forcontu Simple Block")
 * )
 */
class SimpleBlock extends BlockBase {

  public function build() {
    return [
      '#markup' => '<p>'.$this->t('Simple Block Type').'</p>'
    ];
  }

  public function defaultConfiguration() {
    return [
      'label' => 'Custom Luna Block Type',
      'label_display' => FALSE
    ];
  }
}
