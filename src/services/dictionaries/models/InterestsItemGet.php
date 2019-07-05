<?php

namespace directapi\services\dictionaries\models;


use directapi\components\Model;
use directapi\common\enum\YesNoEnum;

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
     * @var YesNoEnum[]
     */
    public $IsTargetable;

}