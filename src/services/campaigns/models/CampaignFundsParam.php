<?php

namespace directapi\services\campaigns\models;

use directapi\components\Model;

class CampaignFundsParam extends Model
{
    /**
     * @var int
     */
    public $Sum;

    /**
     * @var int
     */
    public $Balance;

    /**
     * @var int
     */
    public $BalanceBonus;

    /**
     * @var int
     */
    public $SumAvailableForTransfer;
}
