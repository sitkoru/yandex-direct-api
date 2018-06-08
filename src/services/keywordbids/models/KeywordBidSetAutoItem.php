<?php

namespace directapi\services\keywordbids\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class KeywordBidSetAutoItem extends Model implements ICallbackValidation
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
    public $MaxBid;

    /**
     * @var BiddingRuleItem
     * @Assert\Valid()
     */
    public $BiddingRule;

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
    }
}