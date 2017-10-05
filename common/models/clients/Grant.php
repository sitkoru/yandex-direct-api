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
     * @var \directapi\components\Model
     */
    public $Value;

    /**
     * @var string
     */
    public $Agency;
}