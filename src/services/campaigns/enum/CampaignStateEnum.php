<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignStateEnum extends Enum
{
    public const CONVERTED = 'CONVERTED';
    public const ARCHIVED = 'ARCHIVED';
    public const SUSPENDED = 'SUSPENDED';
    public const ENDED = 'ENDED';
    public const ON = 'ON';
    public const OFF = 'OFF';
    public const UNKNOWN = 'UNKNOWN';
}
