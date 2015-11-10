<?php

namespace directapi\services\campaigns\models;


use directapi\services\campaigns\enum\DailyBudgetModeEnum;

class DailyBudget
{
    /**
     * @var int
     */
    public $Amount;

    /**
     * @var DailyBudgetModeEnum
     */
    public $Mode;
}