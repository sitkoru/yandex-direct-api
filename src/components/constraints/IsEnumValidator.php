<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class IsEnumValidator extends ConstraintValidator
{

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed                   $value      The value that should be validated
     * @param ContainsEnum|Constraint $constraint The constraint for the validation
     */
    public function validate($value, Constraint $constraint)
    {
        if ($value) {
            $type = $constraint->type;
            $values = $type::getValues();
            if (!in_array($value, $values)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ type }}', $constraint->type)
                    ->setParameter('{{ value }}', $value)
                    ->addViolation();
            }
        }
    }
}