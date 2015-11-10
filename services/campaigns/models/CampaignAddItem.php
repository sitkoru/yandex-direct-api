<?php

namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;
use Symfony\Component\Validator\Constraints as Assert;

class CampaignAddItem
{
    /**
     * @var string
     * @Assert\NotBlank()
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
    public $TimeZone = 'Europe/Moscow';

    /**
     * @var ArrayOfString
     * @Assert\Valid()
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