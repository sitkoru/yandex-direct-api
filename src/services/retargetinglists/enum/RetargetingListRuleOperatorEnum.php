<?php

namespace directapi\services\retargetinglists\enum;


use directapi\components\Enum;

class RetargetingListRuleOperatorEnum extends Enum
{
    const ALL = 'ALL';
    const ANY = 'ANY';
    const NONE = 'NONE';
    const FOR_TARGETS_AND_ADJUSTMENTS = 'FOR_TARGETS_AND_ADJUSTMENTS';
}