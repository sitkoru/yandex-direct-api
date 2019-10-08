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
     * @var \directapi\common\containers\ArrayOfInteger
     */
    public $NegativeKeywordSharedSetIds;

    /**
     * @var string
     */
    public $TrackingParams;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupStatusEnum
     */
    public $Status;

    /**
     * @var \directapi\common\enum\ServingStatusEnum
     */
    public $ServingStatus;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupTypesEnum
     */
    public $Type;

    /**
     * @var \directapi\services\adgroups\enum\AdGroupSubtypesEnum
     */
    public $Subtype;

    /**
     * @var MobileAppAdGroupGet
     */
    public $MobileAppAdGroup;

    /**
     * @var DynamicTextAdGroupGet
     */
    public $DynamicTextAdGroup;

    /**
     * @var DynamicTextFeedAdGroupGet
     */
    public $DynamicTextFeedAdGroup;

    public function getDescription(): ?string
    {
        return $this->Name;
    }
}
