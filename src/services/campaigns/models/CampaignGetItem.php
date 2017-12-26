<?php

namespace directapi\services\campaigns\models;

use directapi\components\Model;

class CampaignGetItem extends Model
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
     * @var string
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
     */
    public $TimeTargeting;

    /**
     * @var string
     */
    public $TimeZone;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $BlockedIps;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $ExcludedSites;

    /**
     * @var DailyBudget
     */
    public $DailyBudget;

    /**
     * @var Notification
     */
    public $Notification;

    /**
     * @var \directapi\services\campaigns\enum\CampaignTypeEnum
     */
    public $Type;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStatusEnum
     */
    public $Status;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStateEnum
     */
    public $State;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStatusPaymentEnum
     */
    public $StatusPayment;

    /**
     * @var string
     */
    public $StatusClarification;

    /**
     * @var int
     */
    public $SourceId;

    /**
     * @var Statistics
     */
    public $Statistics;

    /**
     * @var \directapi\common\enum\CurrencyEnum
     */
    public $Currency;

    /**
     * @var FundsParam
     */
    public $Funds;

    /**
     * @var CampaignAssistant
     */
    public $RepresentedBy;

    /**
     * @var TextCampaignItem
     */
    public $TextCampaign;

    /**
     * @var MobileAppCampaignItem
     */
    public $MobileAppCampaign;

    public function getDescription()
    {
        return $this->Name;
    }
}