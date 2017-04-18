<?php

use directapi\common\results\ExceptionNotification;
use directapi\components\Model;

class AdImageActionResult extends Model
{
    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var ExceptionNotification[]
     */
    public $Errors;
}