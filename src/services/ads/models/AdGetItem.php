<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class AdGetItem extends Model
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
     * @var \directapi\services\ads\enum\AdStatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $StatusClarification;

    /**
     * @var \directapi\common\enum\StateEnum
     */
    public $State;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $AdCategories;

    /**
     * @var \directapi\services\ads\enum\AgeLabelEnum
     */
    public $AgeLabel;

    /**
     * @var \directapi\services\ads\enum\AdTypeEnum
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