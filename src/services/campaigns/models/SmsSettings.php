<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;

class SmsSettings extends Model
{
    /**
     * @var \directapi\services\campaigns\enum\SmsEventsEnum[]
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