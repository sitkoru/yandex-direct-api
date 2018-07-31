<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class IsEnum extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Должно быть значением из {{ type }}. Текущее значение: {{ value }}';
    /**
     * @var string
     */
    public $type;
}