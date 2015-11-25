<?php

namespace directapi\services\adgroups\models;


use directapi\components\Model;

class AdGroupGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int[]
     */
    public $RegionIds;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\services\ads\models\AdGroupStatusEnum
     */
    public $Status;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupTypesEnum
     */
    public $Type;

    /**
     * @var MobileAppAdGroupGet
     */
    public $MobileAppAdGroup;
}