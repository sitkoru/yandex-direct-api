<?php

namespace directapi\services\campaigns\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class TimeTargetingOnPublicHolidays implements ICallbackValidation
{
    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $SuspendOnHolidays;

    /**
     * @var int
     * @Assert\Range(
     *     min=10,
     *     max=200
     * )
     */
    public $BidPercent;

    /**
     * @var int
     * @Assert\Range(
     *     min=0,
     *     max=23
     * )
     */
    public $StartHour;

    /**
     * @var int
     * @Assert\Range(
     *     min=0,
     *     max=24
     * )
     */
    public $EndHour;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if ($this->SuspendOnHolidays == new YesNoEnum(YesNoEnum::NO) && !$this->StartHour) {
            $context->buildViolation('При SuspendOnHolidays=NO должен быть указан параметр StartHour')
                ->atPath('StartHour')
                ->addViolation();
        }
        if ($this->SuspendOnHolidays == new YesNoEnum(YesNoEnum::NO) && !$this->EndHour) {
            $context->buildViolation('При SuspendOnHolidays=NO должен быть указан параметр EndHour')
                ->atPath('EndHour')
                ->addViolation();
        }
    }
}