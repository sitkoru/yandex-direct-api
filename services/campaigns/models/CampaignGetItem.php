<?php

namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;
use directapi\common\enum\CurrencyEnum;
use directapi\components\Model;
use directapi\services\campaigns\enum\CampaignStateEnum;
use directapi\services\campaigns\enum\CampaignStatusEnum;
use directapi\services\campaigns\enum\CampaignStatusPaymentEnum;
use directapi\services\campaigns\enum\CampaignTypeEnum;

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
     * @var ArrayOfString
     */
    public $NegativeKeywords;

    /**
     * @var ArrayOfString
     */
    public $BlockedIps;

    /**
     * @var ArrayOfString
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
     * @var CampaignTypeEnum
     */
    public $Type;

    /**
     * @var CampaignStatusEnum
     */
    public $Status;

    /**
     * @var CampaignStateEnum
     */
    public $State;

    /**
     * @var CampaignStatusPaymentEnum
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
     * @var CurrencyEnum
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
}