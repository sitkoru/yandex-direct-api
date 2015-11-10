<?php

namespace directapi\services\campaigns\models;


use directapi\services\campaigns\enum\SmsEventsEnum;

class SmsSettings
{
    /**
     * @var SmsEventsEnum[]
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