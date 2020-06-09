<?php

namespace directapi\common\models\clients;

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
     * @var \directapi\common\enum\clients\RoleEnum
     */
    public $Role;
}
