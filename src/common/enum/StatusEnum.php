<?php

namespace directapi\common\enum;

use directapi\components\Enum;

class StatusEnum extends Enum
{
    public const ACCEPTED = 'ACCEPTED';
    public const MODERATION = 'MODERATION';
    public const REJECTED = 'REJECTED';
}
