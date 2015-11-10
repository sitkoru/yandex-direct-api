<?php

namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;

class CampaignUpdateItem
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
     * @var TextCampaignItem
     */
    public $TextCampaign;

    /**
     * @var MobileAppCampaignItem
     */
    public $MobileAppCampaign;
}