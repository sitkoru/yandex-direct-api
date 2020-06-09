<?php


namespace directapi\services\audiencetargets\models;

use directapi\components\Model;

class AudienceTargetAddItem extends Model
{
    /**
     * @var int
     */
    public $AdGroupId;

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
}
