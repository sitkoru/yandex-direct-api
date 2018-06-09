<?php

namespace directapi\services\keywordbids\models;

use directapi\common\enum\PriorityEnum;
use directapi\components\Model;
use directapi\services\keywordbids\enum\ServingStatusEnum;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var ServingStatusEnum
     */
    public $ServingStatus;

    /**
     * @var PriorityEnum
     */
    public $StrategyPriority;

    /**
     * @var SearchItem
     */
    public $Search;

    /**
     * @var NetworkItem
     * @Assert\Valid()
     */
    public $Network;
}