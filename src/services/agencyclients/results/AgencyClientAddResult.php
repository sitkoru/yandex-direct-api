<?php

namespace directapi\services\agencyclients\results;

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
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Errors;
}
