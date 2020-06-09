<?php

namespace directapi\common\enum;

use directapi\components\Enum;

class ModerationStatusEnum extends Enum
{
    public const ACCEPTED = 'ACCEPTED';
    public const MODERATION = 'MODERATION';
    public const REJECTED = 'REJECTED';
    public const DRAFT = 'DRAFT';
    public const UNKNOWN = 'UNKNOWN';
}
