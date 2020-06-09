<?php

namespace directapi\services\campaigns\models;

use directapi\common\containers\ArrayOfString;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class CampaignUpdateItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $Name;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $ClientInfo;

    /**
     * @var string
     */
    public $StartDate;

    /**
     * @var string
     */
    public $EndDate;

    /**
     * @var TimeTargeting
     * @Assert\Type(type="directapi\services\campaigns\models\TimeTargeting")
     */
    public $TimeTargeting;

    /**
     * @var string
     */
    public $TimeZone;

    /**
     * @var ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $NegativeKeywords;

    /**
     * @var ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $BlockedIps;

    /**
     * @var ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $ExcludedSites;

    /**
     * @var DailyBudget
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\DailyBudget")
     */
    public $DailyBudget;

    /**
     * @var Notification
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\Notification")
     */
    public $Notification;

    /**
     * @var TextCampaignUpdateItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\TextCampaignUpdateItem")
     */
    public $TextCampaign;

    /**
     * @var MobileAppCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\MobileAppCampaignItem")
     */
    public $MobileAppCampaign;

    /**
     * @var DynamicTextCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\DynamicTextCampaignItem")
     */
    public $DynamicTextCampaign;

    /**
     * @var CpmBannerCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\CpmBannerCampaignItem")
     */
    public $CpmBannerCampaign;

    /**
     * @var SmartCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\SmartCampaignItem")
     */
    public $SmartCampaign;
}
