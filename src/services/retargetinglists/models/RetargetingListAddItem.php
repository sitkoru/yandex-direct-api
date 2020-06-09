<?php

namespace directapi\services\retargetinglists\models;

use directapi\components\Model;

class RetargetingListAddItem extends Model
{
    /**
     * @var string
     */
    public $Name;

    /**
     * @var string
     */
    public $Description;

    /**
     * @var RetargetingListRuleItem[]
     */
    public $Rules;
}
