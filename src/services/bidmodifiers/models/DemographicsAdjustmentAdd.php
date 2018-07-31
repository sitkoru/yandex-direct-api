<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class DemographicsAdjustmentAdd extends Model implements ICallbackValidation
{
    /**
     * @var \directapi\services\bidmodifiers\enum\GenderEnum
     */
    public $Gender;

    /**
     * @var \directapi\services\ads\enum\AgeRangeEnum
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
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->Gender && !$this->Age) {
            $context->buildViolation('Необходимо указать одно из значений: Gender, Age')
                ->atPath('Gender')
                ->atPath('Age')
                ->addViolation();
        }
    }
}