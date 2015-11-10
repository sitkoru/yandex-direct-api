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
     * @DirectApiAssert\ArrayOf(type="directapi\services\adgroups\enum\AdGroupTypesEnum")
     */
    public $Types;

    /**
     * @var AdGroupStatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\adgroups\enum\AdGroupStatusEnum")
     */
    public $Statuses;

    /**
     * @var StatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StatusEnum")
     */
    public $AppIconStatuses;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!($this->Ids == [] && count($this->CampaignIds) > 0)) {
            $context->buildViolation('CampaignIds должны быть указаны, если Ids пусты')
                ->atPath('CampaignIds')
                ->addViolation();
        }
        if (!($this->CampaignIds == [] && count($this->Ids) > 0)) {
            $context->buildViolation('Ids должны быть указаны, если CampaignIds пусты')
                ->atPath('Ids')
                ->addViolation();
        }
    }
}