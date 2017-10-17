<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsEnum extends Constraint
{
    public $message = 'Должно содержать значения из {{ type }}. Неверные элементы: {{ value }}';
    public $type;
}