<?php

namespace directapi\services\clients\models;


use directapi\components\Model;
use directapi\services\clients\enum\RoleEnum;

class Representative extends Model
{
    /**
     * @var string
     */
    public $Login;

    /**
     * @var string
     */
    public $Email;

    /**
     * @var RoleEnum
     */
    public $Role;
}