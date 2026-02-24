<?php

namespace Drupal\practicasdromen\Controller;

use Drupal\Core\Controller\ControllerBase;

class HolaController extends ControllerBase {

  public function content() {
    return [
      '#markup' => '<h1>Hola mundo desde mi módulo 😎</h1>',
    ];
  }

}
