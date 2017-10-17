<?php

namespace directapi\common\enum;

use directapi\components\Enum;

class StateEnum extends Enum
{
    const SUSPENDED = 'SUSPENDED';
    const OFF_BY_MONITORING = 'OFF_BY_MONITORING';
    const ON = 'ON';
    const OFF = 'OFF';
    const ARCHIVED = 'ARCHIVED';
}