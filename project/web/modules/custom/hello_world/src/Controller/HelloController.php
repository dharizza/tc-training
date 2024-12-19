<?php

declare(strict_types=1);

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello World routes.
 */
final class HelloController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function hello($person = NULL): array {
    $output = $this->t('Hello World!');

    if ($person !== NULL) {
      $output = $this->t('Hello @person_name!', ['@person_name' => $person]);
    }

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $output,
    ];

    return $build;
  }

}
