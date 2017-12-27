<?php

namespace directapi\services\retargetinglists\enum;


use directapi\components\Enum;

class RetargetingListFieldEnum extends Enum
{
    const ID = 'Id';
    const NAME = 'Name';
    const DESCRIPTION = 'Description';
    const RULES = 'Rules';
    const IS_AVAILABLE = 'IsAvailable';
    const SCOPE = 'Scope';
}