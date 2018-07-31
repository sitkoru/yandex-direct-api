<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class SmsEventsEnum extends Enum
{
    public const MONITORING = 'MONITORING';
    public const MODERATION = 'MODERATION';
    public const MONEY_IN = 'MONEY_IN';
    public const MONEY_OUT = 'MONEY_OUT';
    public const FINISHED = 'FINISHED';
}