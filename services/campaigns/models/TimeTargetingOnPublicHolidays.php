<?php

namespace directapi\services\campaigns\models;

use directapi\common\enum\YesNoEnum;

class TimeTargetingOnPublicHolidays
{
    /**
     * @var YesNoEnum
     */
    public $SuspendOnHolidays;

    /**
     * @var int
     */
    public $BidPercent;
    /**
     * @var int
     */
    public $StartHour;
    /**
     * @var int
     */
    public $EndHour;
}