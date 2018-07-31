<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BidModifierAddItem extends Model implements ICallbackValidation
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
     * @var MobileAdjustmentAdd
     * @Assert\Valid()
     */
    public $MobileAdjustment;

    /**
     * @var DemographicsAdjustmentAdd[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\bidmodifiers\models\DemographicsAdjustmentAdd")
     * @Assert\Valid()
     * @Assert\Count(
     *     max="10"
     * )
     */
    public $DemographicsAdjustments;

    /**
     * @var RetargetingAdjustmentAdd[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\bidmodifiers\models\RetargetingAdjustmentAdd")
     * @Assert\Valid()
     * @Assert\Count(
     *     max="100"
     * )
     */
    public $RetargetingAdjustments;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->CampaignId && !$this->AdGroupId) {
            $context->buildViolation('Должно быть указано одно из следующих значений: CampaignId, AdGroupId')
                ->atPath('CampaignId')
                ->atPath('AdGroupId')
                ->addViolation();
        }
        if (!$this->MobileAdjustment && !$this->DemographicsAdjustments && !$this->RetargetingAdjustments) {
            $context->buildViolation('Должно быть указано одно из следующих значений: MobileAdjustment, DemographicsAdjustments, RetargetingAdjustments')
                ->atPath('MobileAdjustment')
                ->atPath('DemographicsAdjustments')
                ->atPath('RetargetingAdjustments')
                ->addViolation();
        }
    }
}