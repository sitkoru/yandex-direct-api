<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class SmsEventsEnum extends Enum
{
    const MONITORING = 'MONITORING';
    const MODERATION = 'MODERATION';
    const MONEY_IN = 'MONEY_IN';
    const MONEY_OUT = 'MONEY_OUT';
    const FINISHED = 'FINISHED';
}