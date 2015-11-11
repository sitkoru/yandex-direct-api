<?php

namespace directapi\services\bidmodifiers\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\bidmodifiers\enum\BidModifierTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BidModifierToggleItem
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var BidModifierTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\bidmodifiers\enum\BidModifierTypeEnum")
     */
    public $Type;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Enabled;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->CampaignId && !$this->AdGroupId) {
            $context->buildViolation('Необходимо указать CampaignId либо AdGroupId')
                ->atPath('CampaignId')
                ->atPath('AdGroupId')
                ->addViolation();
        }
    }
}