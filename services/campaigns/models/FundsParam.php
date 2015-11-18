<?php

namespace directapi\services\campaigns\models;


use directapi\components\Model;
use directapi\services\campaigns\enum\CampaignFundsEnum;

class FundsParam extends Model
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