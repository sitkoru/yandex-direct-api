<?php

namespace directapi\services\keywordbids\criterias;


use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use directapi\services\adgroups\enum\AdGroupStatusEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class KeywordBidsSelectionCriteria extends Model implements ICallbackValidation
{
    /**
     * @var int[]
     * @Assert\Count(
     *     max="10000"
     * )
     */
    public $KeywordIds;

    /**
     * @var int[]
     * @Assert\Count(
     *     max="1000"
     * )
     */
    public $AdGroupIds;

    /**
     * @var int[]
     * @Assert\Count(
     *     max="10"
     * )
     */
    public $CampaignIds;

    /**
     * @var AdGroupStatusEnum[]
     */
    public $ServingStatuses;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->CampaignIds && !$this->AdGroupIds && !$this->KeywordIds) {
            $context->buildViolation('Должно быть указано одно из следующих значений: CampaignIds, AdGroupIds, KeywordIds')
                ->atPath('CampaignIds')
                ->atPath('AdGroupIds')
                ->atPath('KeywordIds')
                ->addViolation();
        }
    }
}