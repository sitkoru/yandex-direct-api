<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AdGroupStatusEnum extends Enum
{
    public const DRAFT = 'DRAFT';
    public const MODERATION = 'MODERATION';
    public const PREACCEPTED = 'PREACCEPTED';
    public const ACCEPTED = 'ACCEPTED';
    public const REJECTED = 'REJECTED';
}