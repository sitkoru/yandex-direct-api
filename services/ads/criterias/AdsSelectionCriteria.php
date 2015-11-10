<?php

namespace directapi\services\ads\criterias;


use directapi\common\enum\StateEnum;
use directapi\common\enum\StatusEnum;
use directapi\common\enum\YesNoEnum;
use directapi\services\ads\enum\AdStatusEnum;
use directapi\services\ads\enum\AdTypeEnum;

class AdsSelectionCriteria
{
    /**
     * @var int[]
     */
    public $Ids;
    /**
     * @var int[]
     */
    public $AdGroupIds;
    /**
     * @var int[]
     */
    public $CampaignIds;

    /**
     * @var YesNoEnum
     */
    public $Mobile;

    /**
     * @var AdTypeEnum[]
     */
    public $Types;

    /**
     * @var StateEnum
     */
    public $States;

    /**
     * @var AdStatusEnum[]
     */
    public $Statuses;

    /**
     * @var int[]
     */
    public $VCardIds;

    /**
     * @var StatusEnum[]
     */
    public $VCardModerationStatuses;

    /**
     * @var int[]
     */
    public $SitelinkSetIds;

    /**
     * @var string[]
     */
    public $AdImageHashes;

    /**
     * @var StatusEnum[]
     */
    public $SitelinksModerationStatuses;

    /**
     * @var StatusEnum[]
     */
    public $AdImageModerationStatuses;
}