<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ArrayOf extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Должно быть массивом элементов класса {{ type }}. Неверные элементы: {{ value }}';

    /**
     * @var string
     */
    public $type;
}