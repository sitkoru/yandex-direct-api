<?php

namespace directapi\services\adgroups\criterias;


use directapi\common\enum\StatusEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\adgroups\enum\AdGroupTypesEnum;
use directapi\services\ads\models\AdGroupStatusEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdGroupsSelectionCriteria
{
    /**
     * @var int[]
     */
    public $CampaignIds;

    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var AdGroupTypesEnum[]
     * @DirectApiAssert\ContainsEnum(type="directapi\services\adgroups\enum\AdGroupTypesEnum")
     */
    public $Types;

    /**
     * @var AdGroupStatusEnum[]
     */
    public $Statuses;

    /**
     * @var StatusEnum[]
     */
    public $AppIconStatuses;

    /**
     * @Assert\Callback
     * @param ExecutionContextInterface $context
     */
    public function isCampaignIdsValid(ExecutionContextInterface $context)
    {
        if (!($this->Ids == [] && count($this->CampaignIds) > 0)) {
            $context->buildViolation('CampaignIds должны быть указаны, если Ids пусты')
                ->atPath('CampaignIds')
                ->addViolation();
        }
    }

    /**
     * @Assert\Callback
     * @param ExecutionContextInterface $context
     */
    public function isIdsValid(ExecutionContextInterface $context)
    {
        if (!($this->CampaignIds == [] && count($this->Ids) > 0)) {
            $context->buildViolation('Ids должны быть указаны, если CampaignIds пусты')
                ->atPath('Ids')
                ->addViolation();
        }
    }
}