<?php

namespace directapi\services\campaigns\models;


use directapi\services\campaigns\enum\RelevantKeywordsModeEnum;

class RelevantKeywordsSetting
{
    /**
     * @var int
     */
    public $BudgetPercent;

    /**
     * @var RelevantKeywordsModeEnum
     */
    public $Mode;
}