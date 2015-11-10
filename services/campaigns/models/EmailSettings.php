<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;

class EmailSettings
{
    /**
     * @var string
     */
    public $Email;

    /**
     * @var int
     */
    public $CheckPositionInterval;

    /**
     * @var int
     */
    public $WarningBalance;

    /**
     * @var YesNoEnum
     */
    public $SendAccountNews;

    /**
     * @var YesNoEnum
     */
    public $SendWarnings;
}