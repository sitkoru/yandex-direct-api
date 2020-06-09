<?php

namespace directapi\common\enum\clients;

use directapi\components\Enum;

class RoleEnum extends Enum
{
    public const CHIEF = 'CHIEF';
    public const DELEGATE = 'DELEGATE';
    public const LIMITED = 'LIMITED';
    public const UNKNOWN = 'UNKNOWN';
}
