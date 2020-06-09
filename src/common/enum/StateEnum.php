<?php

namespace directapi\common\enum;

use directapi\components\Enum;

class StateEnum extends Enum
{
    public const SUSPENDED = 'SUSPENDED';
    public const OFF_BY_MONITORING = 'OFF_BY_MONITORING';
    public const ON = 'ON';
    public const OFF = 'OFF';
    public const ARCHIVED = 'ARCHIVED';
}
