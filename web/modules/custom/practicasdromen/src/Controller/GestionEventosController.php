<?php

namespace Drupal\practicasdromen\Controller;

use Drupal\Core\Controller\ControllerBase;

class GestionEventosController extends ControllerBase {

  public function content() {
    return [
      '#markup' => 'Página de gestión de eventos funcionando correctamente.',
    ];
  }

}
