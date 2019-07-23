<?php

namespace directapi\services\adgroups\models;


use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdGroupAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $CampaignId;

    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $RegionIds;

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\common\containers\ArrayOfInteger
     * @Assert\Valid()
     */
    public $NegativeKeywordSharedSetIds;

    /**
     * @var string
     * @Assert\Length(
     *      max = 1024
     * )
     */
    public $TrackingParams;

    /**
     * @var MobileAppAdGroupAdd
     * @Assert\Valid()
     */
    public $MobileAppAdGroup;

    /**
     * @var DynamicTextAdGroupAdd
     * @Assert\Valid()
     */
    public $DynamicTextAdGroup;

    /**
     * @var CpmBannerKeywordsAdGroupAdd
     * @Assert\Valid()
     */
    public $CpmBannerKeywordsAdGroup;

    /**
     * @var CpmBannerUserProfileAdGroupAdd
     * @Assert\Valid()
     */
    public $CpmBannerUserProfileAdGroup;

    /**
     * @var CpmVideoAdGroupAdd
     */
    public $CpmVideoAdGroup;

}
