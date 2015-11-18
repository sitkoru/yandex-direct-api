<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\SmsEventsEnum;

class SmsSettings extends Model
{
    /**
     * @var SmsEventsEnum[]
     * @DirectApiAssert\ContainsEnum(type="directapi\services\campaigns\enum\SmsEventsEnum")
     */
    public $Events;

    /**
     * @var string
     */
    public $TimeFrom;

    /**
     * @var string
     */
    public $TimeTo;
}