<?php

namespace directapi\services\dictionaries\models;

use directapi\components\Model;

class InterestsItemGet extends Model
{
    /**
     * @var int
     */
    public $InterestId;

    /**
     * @var int
     */
    public $ParentId;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var \directapi\common\enum\YesNoEnum[]
     */
    public $IsTargetable;
}
