<?php

namespace directapi\services\campaigns\models;


use directapi\components\Model;

class FundsParam extends Model
{
    /**
     * @var \directapi\services\campaigns\enum\CampaignFundsEnum
     */
    public $Mode;

    /**
     * @var \directapi\services\campaigns\models\CampaignFundsParam
     */
    public $CampaignFunds;

    /**
     * @var SharedAccountFundsParam
     */
    public $SharedAccountFunds;
}