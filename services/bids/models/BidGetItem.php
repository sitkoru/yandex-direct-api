<?php

namespace directapi\services\bids\models;

use directapi\common\enum\PriorityEnum;

class BidGetItem
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

    /**
     * @var int[]
     */
    public $CompetitorsBids;

    /**
     * @var SearchPrices[]
     */
    public $SearchPrices;

    /**
     * @var ContextCoverage
     */
    public $ContextCoverage;

    /**
     * @var int
     */
    public $MinSearchPrice;

    /**
     * @var int
     */
    public $CurrentSearchPrice;

    /**
     * @var AuctionBidItem
     */
    public $AuctionBids;
}