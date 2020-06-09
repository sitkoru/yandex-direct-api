<?php

namespace directapi\services\retargetinglists\models;

use directapi\components\Model;

class RetargetingListUpdateItem extends Model
{
    /**
     * @var int
     */
    public $Id;

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
