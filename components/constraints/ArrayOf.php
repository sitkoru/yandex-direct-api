<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ArrayOf extends Constraint
{
    public $message = 'Должно быть массивом элементов класса {{ type }}. Неверные элементы: {{ value }}';
    public $type;
}