<?php

namespace directapi\services\audiencetargets\models;

use directapi\components\Model;

class AudienceTargetGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $RetargetingListId;

    /**
     * @var int
     */
    public $InterestId;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var \directapi\common\enum\PriorityEnum
     */
    public $StrategyPriority;

    /**
     * @var \directapi\services\audiencetargets\enum\AudienceTargetStateEnum
     */
    public $State;
}
