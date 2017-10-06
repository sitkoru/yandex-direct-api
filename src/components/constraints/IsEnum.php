<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class IsEnum extends Constraint
{
    public $message = 'Должно быть значением из {{ type }}. Текущее значение: {{ value }}';
    public $type;
}