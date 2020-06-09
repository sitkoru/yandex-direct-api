<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BidModifierToggleItem extends Model implements ICallbackValidation
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
     * @var \directapi\services\bidmodifiers\enum\BidModifierTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\bidmodifiers\enum\BidModifierTypeEnum")
     */
    public $Type;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Enabled;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->CampaignId && !$this->AdGroupId) {
            $context->buildViolation('Необходимо указать CampaignId либо AdGroupId')
                ->atPath('CampaignId')
                ->atPath('AdGroupId')
                ->addViolation();
        }
    }
}
