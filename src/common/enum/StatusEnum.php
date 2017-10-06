<?php

namespace directapi\common\enum;


use directapi\components\Enum;

class StatusEnum extends Enum
{
    const ACCEPTED = 'ACCEPTED';
    const MODERATION = 'MODERATION';
    const REJECTED = 'REJECTED';
}