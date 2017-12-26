<?php

namespace directapi\services\keywords\models;

use directapi\components\Model;

class KeywordGetItem extends Model
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
     * @var string
     */
    public $Keyword;

    /**
     * @var string
     */
    public $UserParam1;

    /**
     * @var string
     */
    public $UserParam2;

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
     * @var \directapi\services\keywords\enum\KeywordStatusEnum
     */
    public $Status;

    /**
     * @var \directapi\common\enum\StateEnum
     */
    public $State;

    /**
     * @var Productivity
     */
    public $Productivity;

    public function getDescription()
    {
        return $this->Keyword;
    }
}