<?php

namespace directapi\services\bids\models;

use directapi\common\enum\PriorityEnum;
use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BidSetItem
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
     * @var int
     */
    public $KeywordId;

    /**
     * @var int
     */
    public $Bid;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var PriorityEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\PriorityEnum")
     */
    public $StrategyPriority;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->CampaignId && !$this->AdGroupId && !$this->KeywordId) {
            $context->buildViolation('Должно быть указано одно из следующих значений: CampaignId, AdGroupId, KeywordId')
                ->atPath('CampaignId')
                ->atPath('AdGroupId')
                ->atPath('KeywordId')
                ->addViolation();
        }
        if (!$this->Bid && !$this->ContextBid && !$this->StrategyPriority) {
            $context->buildViolation('Должно быть указано одно из следующих значений: Bid, ContextBid, StrategyPriority')
                ->atPath('Bid')
                ->atPath('ContextBid')
                ->atPath('StrategyPriority')
                ->addViolation();
        }
    }
}