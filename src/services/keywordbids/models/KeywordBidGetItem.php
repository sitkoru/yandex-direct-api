<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;
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
     * @var \directapi\common\enum\ServingStatusEnum
     */
    public $ServingStatus;

    /**
     * @var \directapi\common\enum\PriorityEnum
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
