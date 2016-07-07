<?php

namespace directapi\components\constraints;


use directapi\components\Enum;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ArrayOfEnumValidator extends ConstraintValidator
{

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed                   $array      The value that should be validated
     * @param ContainsEnum|Constraint $constraint The constraint for the validation
     */
    public function validate($array, Constraint $constraint)
    {
        if ($array) {
            if (!is_array($array)) {
                $this->context->buildViolation('Должно быть массивом')
                    ->addViolation();
            } else {
                /**
                 * @var Enum $type
                 */
                $type = $constraint->type;

                $badValues = [];
                foreach ($array as $i => $v) {
                    if ($type->check([$v])) {
                        $badValues[] = $i . " => " . $v;
                    }
                }
                if ($badValues) {
                    $this->context->buildViolation($constraint->message)
                        ->setParameter('{{ type }}', $constraint->type)
                        ->setParameter('{{ value }}', implode(', ', $badValues))
                        ->addViolation();
                }
            }
        }
    }
}