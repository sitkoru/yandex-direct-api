<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AppAvailabilityStatusEnum extends Enum
{
    const AVAILABLE = 'AVAILABLE';
    const NOT_AVAILABLE = 'NOT_AVAILABLE';
    const UNPROCESSED = 'UNPROCESSED';
}