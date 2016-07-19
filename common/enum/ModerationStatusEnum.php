<?php

namespace directapi\common\enum;


use directapi\components\Enum;

class ModerationStatusEnum extends Enum
{
    const ACCEPTED = 'ACCEPTED';
    const MODERATION = 'MODERATION';
    const REJECTED = 'REJECTED';
    const DRAFT = 'DRAFT';
    const UNKNOWN = 'UNKNOWN';
}