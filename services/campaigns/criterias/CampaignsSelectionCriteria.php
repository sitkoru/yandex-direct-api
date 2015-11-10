<?php
namespace directapi\services\campaigns\criterias;

use directapi\services\campaigns\enum\CampaignStateEnum;
use directapi\services\campaigns\enum\CampaignStatusEnum;
use directapi\services\campaigns\enum\CampaignStatusPaymentEnum;
use directapi\services\campaigns\enum\CampaignTypeEnum;

class CampaignsSelectionCriteria
{
    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var CampaignTypeEnum[]
     */
    public $Types;

    /**
     * @var CampaignStateEnum[]
     */
    public $States;

    /**
     * @var CampaignStatusEnum[]
     */
    public $Statuses;

    /**
     * @var CampaignStatusPaymentEnum[]
     */
    public $StatusesPayment;
}