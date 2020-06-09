<?php

namespace directapi\services\audiencetargets\criterias;

use directapi\components\Model;

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
     * @var \directapi\services\audiencetargets\enum\AudienceTargetStateEnum[]
     */
    public $States;
}
