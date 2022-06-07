<?php

namespace Drupal\storizborn_surcharger\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "storizborn_surcharger_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("storizborn_surcharger")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
