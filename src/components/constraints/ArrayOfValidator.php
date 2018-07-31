<?php

namespace directapi\components\constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ArrayOfValidator extends ConstraintValidator
{

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed                   $array      The value that should be validated
     * @param ContainsEnum|Constraint $constraint The constraint for the validation
     */
    public function validate($array, Constraint $constraint): void
    {
        if ($array !== null) {
            if (!\is_array($array)) {
                $this->context->buildViolation('Должно быть массивом')
                    ->addViolation();
            } else {
                $type = $constraint->type;
                $badValues = [];
                foreach ($array as $i => $v) {
                    $valueType = \is_object($v) ? \get_class($v) : \gettype($v);
                    if ($valueType !== $type) {
                        $badValues[] = $i . ' => ' . $valueType;
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