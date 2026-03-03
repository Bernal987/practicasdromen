<?php
namespace Drupal\practicasdromen\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the UniqueInteger constraint.
 */
class EventConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    $fechaInicio= $entity->get('field_fecha_de_inicio')->value;
    $fechaFin= $entity->get('field_fecha_de_fin')->value;
    if (empty($fechaInicio)){
      $this->context->buildViolation($constraint->fechaInicioVacia)
        ->setParameter('@field', 'field_fecha_de_inicio')
        ->atPath('field_fecha_de_inicio')
        ->addViolation();
    }
    if (empty($fechaFin)){
      $this->context->buildViolation($constraint->fechaFinVacia)
        ->setParameter('@field', 'field_fecha_de_fin')
        ->atPath('field_fecha_de_fin')
        ->addViolation();
    }
    if ($fechaFin<$fechaInicio){
      $this->context->buildViolation($constraint->fechaFinInferior)
        ->setParameter('@field', 'field_fecha_de_fin')
        ->atPath('field_fecha_de_fin')
        ->addViolation();
    }
  }



}
