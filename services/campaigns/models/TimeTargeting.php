<?php
namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;
use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class TimeTargeting extends Model
{
    /**
     * @var ArrayOfString
     * @Assert\Valid()
     */
    public $Schedule;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $ConsiderWorkingWeekends;

    /**
     * @var TimeTargetingOnPublicHolidays
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\TimeTargetingOnPublicHolidays")
     */
    public $HolidaysSchedule;
}