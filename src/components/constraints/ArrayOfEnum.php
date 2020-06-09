<?php

namespace directapi\components\constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ArrayOfEnum extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Должно быть массивом перечисления {{ type }}. Неверные элементы: {{ value }}';

    /**
     * @var string
     */
    public $type;
}
