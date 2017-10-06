<?php

namespace directapi\services\bidmodifiers\criterias;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BidModifiersSelectionCriteria extends Model implements ICallbackValidation
{
    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=10
     * )
     */
    public $CampaignIds;

    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=100
     * )
     */
    public $AdGroupIds;

    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=10000
     * )
     */
    public $Ids;

    /**
     * @var \directapi\services\bidmodifiers\enum\BidModifierTypeEnum[]
     * @DirectApiAssert\ArrayOfEnum(type="directapi\services\bidmodifiers\enum\BidModifierTypeEnum")
     * @Assert\Valid()
     */
    public $Types;

    /**
     * @var \directapi\services\bidmodifiers\enum\BidModifierLevelEnum[]
     * @Assert\NotBlank()
     * @DirectApiAssert\ArrayOfEnum(type="directapi\services\bidmodifiers\enum\BidModifierLevelEnum")
     * @Assert\Valid()
     */
    public $Levels;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->CampaignIds && !$this->AdGroupIds && !$this->Ids) {
            $context->buildViolation('Необходимо указать одно из значений: CampaignIds, AdGroupId, Ids')
                ->atPath('CampaignIds')
                ->atPath('AdGroupId')
                ->atPath('Ids')
                ->addViolation();
        }
    }
}