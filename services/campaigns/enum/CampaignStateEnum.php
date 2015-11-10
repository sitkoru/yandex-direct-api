<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignStateEnum extends Enum
{
    const CONVERTED = 'CONVERTED';
    const ARCHIVED = 'ARCHIVED';
    const SUSPENDED = 'SUSPENDED';
    const ENDED = 'ENDED';
    const ON = 'ON';
    const OFF = 'OFF';
    const UNKNOWN = 'UNKNOWN';
}