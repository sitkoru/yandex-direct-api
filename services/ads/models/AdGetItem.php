<?php

namespace directapi\services\ads\models;


use directapi\common\containers\ArrayOfString;
use directapi\common\enum\StateEnum;
use directapi\services\ads\enum\AdStatusEnum;
use directapi\services\ads\enum\AdTypeEnum;
use directapi\services\ads\enum\AgeLabelEnum;

class AdGetItem
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var AdStatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $StatusClarification;

    /**
     * @var StateEnum
     */
    public $State;

    /**
     * @var ArrayOfString
     */
    public $AdCategories;

    /**
     * @var AgeLabelEnum
     */
    public $AgeLabel;

    /**
     * @var AdTypeEnum
     */
    public $Type;

    /**
     * @var TextAdGet
     */
    public $TextAd;

    /**
     * @var MobileAppAdGet
     */
    public $MobileAppAd;

    /**
     * @var int
     */
    public $LimitedBy;
}