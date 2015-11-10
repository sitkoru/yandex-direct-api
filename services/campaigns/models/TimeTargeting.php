<?php
namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;
use directapi\common\enum\YesNoEnum;

class TimeTargeting
{
    /**
     * @var ArrayOfString
     */
    public $Schedule;

    /**
     * @var YesNoEnum
     */
    public $ConsiderWorkingWeekends;

    /**
     * @var TimeTargetingOnPublicHolidays
     */
    public $HolidaysSchedule;
}