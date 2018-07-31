<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsEnum extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Должно содержать значения из {{ type }}. Неверные элементы: {{ value }}';

    /**
     * @var string
     */
    public $type;
}