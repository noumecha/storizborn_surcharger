<?php

namespace Drupal\storizborn_surcharger\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for storizborn_surcharger routes.
 */
class StorizbornSurchargerController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
