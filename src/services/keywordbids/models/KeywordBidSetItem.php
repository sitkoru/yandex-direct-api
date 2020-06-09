<?php

namespace directapi\services\keywordbids\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class KeywordBidSetItem extends Model implements ICallbackValidation
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
    public $SearchBid;

    /**
     * @var int
     */
    public $NetworkBid;

    /**
     * @var \directapi\common\enum\PriorityEnum
     */
    public $StrategyPriority;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->CampaignId && !$this->AdGroupId && !$this->KeywordId) {
            $context->buildViolation('Должно быть указано одно из следующих значений: CampaignId, AdGroupId, KeywordId')
                ->atPath('CampaignId')
                ->atPath('AdGroupId')
                ->atPath('KeywordId')
                ->addViolation();
        }
        if (!$this->SearchBid && !$this->NetworkBid && !$this->StrategyPriority) {
            $context->buildViolation('Должно быть указано одно из следующих значений: SearchBid, NetworkBid, StrategyPriority')
                ->atPath('SearchBid')
                ->atPath('NetworkBid')
                ->atPath('StrategyPriority')
                ->addViolation();
        }
    }
}
