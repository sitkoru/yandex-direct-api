<?php

namespace directapi\services\retargetinglists\enum;


use directapi\components\Enum;

class RetargetingListRuleOperatorEnum extends Enum
{
    public const ALL = 'ALL';
    public const ANY = 'ANY';
    public const NONE = 'NONE';
    public const FOR_TARGETS_AND_ADJUSTMENTS = 'FOR_TARGETS_AND_ADJUSTMENTS';
}