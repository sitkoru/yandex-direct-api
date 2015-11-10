<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignStatusPaymentEnum extends Enum
{
    const DISALLOWED = 'DISALLOWED';
    const ALLOWED = 'ALLOWED';
}