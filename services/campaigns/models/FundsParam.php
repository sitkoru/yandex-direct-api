<?php

namespace directapi\services\campaigns\models;


use directapi\services\campaigns\enum\CampaignFundsEnum;

class FundsParam
{
    /**
     * @var CampaignFundsEnum
     */
    public $Mode;

    /**
     * @var CampaignFundsParam
     */
    public $CampaignFunds;

    /**
     * @var SharedAccountFundsParam
     */
    public $SharedAccountFunds;
}