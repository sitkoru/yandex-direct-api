<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ArrayOfEnum extends Constraint
{
    public $message = 'Должно быть массивом перечисления {{ type }}. Неверные элементы: {{ value }}';
    public $type;
}