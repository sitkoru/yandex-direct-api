<?php

namespace directapi\services\bids\models;

use directapi\common\enum\PriorityEnum;

class BidSetItem
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var int
     */
    public $KeywordId;

    /**
     * @var int
     */
    public $Bid;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var PriorityEnum
     */
    public $StrategyPriority;
}