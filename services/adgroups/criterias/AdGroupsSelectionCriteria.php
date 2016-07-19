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
     * @DirectApiAssert\ArrayOfEnum(type="directapi\services\adgroups\enum\AdGroupTypesEnum")
     */
    public $Types;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupStatusEnum[]
     * @DirectApiAssert\ArrayOfEnum(type="directapi\services\adgroups\enum\AdGroupStatusEnum")
     */
    public $Statuses;

    /**
     * @var \directapi\common\enum\StatusEnum[]
     * @DirectApiAssert\ArrayOfEnum(type="directapi\common\enum\StatusEnum")
     */
    public $AppIconStatuses;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if ($this->Ids == [] && $this->CampaignIds == []) {
            $context->buildViolation('Должны быть указаны CampaignIds или Ids')
                ->atPath('CampaignIds')
                ->addViolation();
        }
    }
}