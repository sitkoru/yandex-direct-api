<?php

namespace directapi\services\retargetinglists\enum;

use directapi\components\Enum;

class RetargetingListFieldEnum extends Enum
{
    public const ID = 'Id';
    public const NAME = 'Name';
    public const DESCRIPTION = 'Description';
    public const RULES = 'Rules';
    public const IS_AVAILABLE = 'IsAvailable';
    public const SCOPE = 'Scope';
}
