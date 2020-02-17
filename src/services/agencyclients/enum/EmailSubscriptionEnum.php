<?php

namespace directapi\services\agencyclients\enum;

use directapi\components\Enum;

class EmailSubscriptionEnum extends Enum
{
    public const RECEIVE_RECOMMENDATIONS = 'RECEIVE_RECOMMENDATIONS';
    public const TRACK_MANAGED_CAMPAIGNS = 'TRACK_MANAGED_CAMPAIGNS';
    public const TRACK_POSITION_CHANGES = 'TRACK_POSITION_CHANGES';
}
