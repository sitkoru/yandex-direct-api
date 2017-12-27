<?php

namespace directapi\services\audiencetargets\models;


use directapi\common\enum\PriorityEnum;
use directapi\components\Model;

class AudienceTargetSetBidsItem extends Model
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
    public $ContextBid;
    /**
     * @var PriorityEnum
     */
    public $StrategyPriority;
}