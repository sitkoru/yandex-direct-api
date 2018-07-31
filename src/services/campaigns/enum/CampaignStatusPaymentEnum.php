<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignStatusPaymentEnum extends Enum
{
    public const DISALLOWED = 'DISALLOWED';
    public const ALLOWED = 'ALLOWED';
}