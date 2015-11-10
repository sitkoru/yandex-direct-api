<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsEnumValidator extends ConstraintValidator
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
            $type = $constraint->type;
            $values = $type::getValues();
            $badValues = [];
            foreach ($array as $v) {
                if (!in_array($v, $values)) {
                    $badValues[] = $v;
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