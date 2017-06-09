<?php

namespace directapi\services\clients\models;


use directapi\components\Model;

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
     * @var \directapi\services\clients\enum\RoleEnum
     */
    public $Role;
}