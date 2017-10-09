<?php

namespace directapi\services\adimages\models;

use directapi\components\Model;

class AdImageActionResult extends Model
{
    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Errors;
}