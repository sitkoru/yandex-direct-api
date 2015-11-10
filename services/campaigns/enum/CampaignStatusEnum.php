<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignStatusEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
    const UNKNOWN = 'UNKNOWN';
}