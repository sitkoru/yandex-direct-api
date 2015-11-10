<?php

namespace directapi\services\bids\models;

use directapi\services\bids\enum\CalculateByEnum;
use directapi\services\bids\enum\PositionEnum;
use directapi\services\bids\enum\ScopeEnum;

class BidSetAutoItem
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
     * @var ScopeEnum[]
     */
    public $Scope;

    /**
     * @var int
     */
    public $MaxBid;

    /**
     * @var PositionEnum
     */
    public $Position;

    /**
     * @var int
     */
    public $IncreasePercent;

    /**
     * @var CalculateByEnum
     */
    public $CalculateBy;

    /**
     * @var int
     */
    public $ContextCoverage;
}