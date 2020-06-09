<?php

namespace directapi\services\audiencetargets\criterias;

use directapi\components\Model;
use directapi\services\audiencetargets\enum\AudienceTargetStateEnum;

class AudienceTargetSelectionCriteria extends Model
{
    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var int[]
     */
    public $AdGroupIds;

    /**
     * @var int[]
     */
    public $CampaignIds;

    /**
     * @var int[]
     */
    public $RetargetingListIds;

    /**
     * @var int[]
     */
    public $InterestIds;

    /**
     * @var AudienceTargetStateEnum[]
     */
    public $States;
}
