<?php

namespace directapi\services\adgroups\enum;

use directapi\components\Enum;

class AppAvailabilityStatusEnum extends Enum
{
    public const AVAILABLE = 'AVAILABLE';
    public const NOT_AVAILABLE = 'NOT_AVAILABLE';
    public const UNPROCESSED = 'UNPROCESSED';
}
