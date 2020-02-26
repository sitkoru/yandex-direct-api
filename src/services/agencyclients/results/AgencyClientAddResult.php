<?php

namespace directapi\services\agencyclients\results;

use directapi\common\results\ExceptionNotification;
use directapi\components\Model;

class AgencyClientAddResult extends Model
{
    /**
     * @var string
     */
    public $Login;

    /**
     * @var string
     */
    public $Password;

    /**
     * @var string
     */
    public $Email;

    /**
     * @var int
     */
    public $ClientId;

    /**
     * @var ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var ExceptionNotification[]
     */
    public $Errors;
}
