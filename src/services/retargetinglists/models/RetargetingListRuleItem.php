<?php

namespace directapi\services\retargetinglists\models;


use directapi\components\Model;

class RetargetingListRuleItem extends Model
{
    /**
     * @var RetargetingListRuleArgumentItem[]
     */
    public $Arguments;

    /**
     * @var \directapi\services\retargetinglists\enum\RetargetingListRuleOperatorEnum
     */
    public $Operator;
}