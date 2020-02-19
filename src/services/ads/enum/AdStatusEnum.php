<?php

namespace directapi\services\ads\enum;

use directapi\common\enum\StatusEnum;

class AdStatusEnum extends StatusEnum
{
    public const DRAFT = 'DRAFT';
    public const MODERATION = 'MODERATION';
    public const PREACCEPTED = 'PREACCEPTED';
    public const ACCEPTED = 'ACCEPTED';
    public const REJECTED = 'REJECTED';
}