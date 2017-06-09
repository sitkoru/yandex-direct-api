<?php

namespace directapi\services\clients\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\Model;

class Grant extends Model
{
    /**
     * @var PrivilegeEnum
     */
    public $Privilege;

    /**
     * @var YesNoEnum
     */
    public $Value;

    /**
     * @var string
     */
    public $Agency;
}