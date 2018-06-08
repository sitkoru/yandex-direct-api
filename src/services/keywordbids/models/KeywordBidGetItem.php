<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;

class KeywordBidGetItem extends Model
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
     * @var \directapi\common\enum\PriorityEnum
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
     * @var AuctionKeywordBidItem
     */
    public $AuctionBids;
}