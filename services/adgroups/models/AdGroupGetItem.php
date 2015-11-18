<?php

namespace directapi\services\adgroups\models;


use directapi\common\containers\ArrayOfString;
use directapi\components\Model;
use directapi\services\adgroups\enum\AdGroupTypesEnum;
use directapi\services\ads\models\AdGroupStatusEnum;

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
     * @var ArrayOfString
     */
    public $NegativeKeywords;

    /**
     * @var AdGroupStatusEnum
     */
    public $Status;

    /**
     * @var AdGroupTypesEnum
     */
    public $Type;

    /**
     * @var MobileAppAdGroupGet
     */
    public $MobileAppAdGroup;
}