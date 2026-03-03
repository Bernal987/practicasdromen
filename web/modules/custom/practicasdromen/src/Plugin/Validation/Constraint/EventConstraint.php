<?php
namespace Drupal\practicasdromen\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the submitted value is a unique integer.
 *
 * @Constraint(
 *   id = "EventConstraint",
 *   label = @Translation("DatesConstraint", context = "Validation"),
 *   type = "string"
 * )
 */
class EventConstraint extends Constraint {

  // Cuando la fecha fin sea inferior a la de inicio
  public $fechaFinInferior ='La fecha de fin es inferior a fecha inicio';
 //Cuando la fecha fin es vacia
  public $fechaFinVacia ='fecha fin es vacia';
 //Caundo la fecha incio es vacia
  public $fechaInicioVacia  ='fecha inicio es vacia';

}
