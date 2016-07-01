<?php

namespace directapi\services\adgroups\criterias;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdGroupsSelectionCriteria extends Model implements ICallbackValidation
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
     * @var \directapi\services\adgroups\enum\AdGroupTypesEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\adgroups\enum\AdGroupTypesEnum")
     */
    public $Types;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupStatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\adgroups\enum\AdGroupStatusEnum")
     */
    public $Statuses;

    /**
     * @var \directapi\common\enum\StatusEnum[]
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