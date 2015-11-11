<?php

namespace directapi\services\bidmodifiers\models;

use directapi\services\ads\enum\AgeRangeEnum;
use directapi\services\bidmodifiers\enum\GenderEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class DemographicsAdjustmentAdd
{
    /**
     * @var GenderEnum
     */
    public $Gender;

    /**
     * @var AgeRangeEnum
     */
    public $Age;

    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 100,
     *      max = 400,
     * )
     */
    public $BidModifier;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->Gender && !$this->Age) {
            $context->buildViolation('Необходимо указать одно из значений: Gender, Age')
                ->atPath('Gender')
                ->atPath('Age')
                ->addViolation();
        }
    }
}