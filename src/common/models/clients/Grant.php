<?php

namespace directapi\common\models\clients;


use directapi\components\Model;

class Grant extends Model
{
    /**
     * @var \directapi\common\enum\clients\PrivilegeEnum
     */
    public $Privilege;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Value;

    /**
     * @var string
     */
    public $Agency;
}
