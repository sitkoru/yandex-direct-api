<?php

namespace directapi\services\retargetinglists\models;

use directapi\components\Model;

class RetargetingListGetItem extends Model
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
     * @var \directapi\common\enum\YesNoEnum
     */
    public $IsAvailable;

    /**
     * @var RetargetingListRuleItem[]
     */
    public $Rules;

    /**
     * @var \directapi\services\retargetinglists\enum\RetargetingListRuleOperatorEnum
     */
    public $Scope;

    public function getDescription(): ?string
    {
        return "RT: {$this->Name}";
    }
}
