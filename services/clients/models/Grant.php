<?php

namespace directapi\services\clients\models;


use directapi\components\Model;

class Grant extends Model
{
    /**
     * @var \directapi\services\clients\enum\PrivilegeEnum
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