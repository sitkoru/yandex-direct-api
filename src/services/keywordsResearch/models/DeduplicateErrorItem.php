<?php

namespace directapi\services\keywordsResearch\models;

use directapi\components\Model;

class DeduplicateErrorItem extends Model
{
    /**
     * @var int
     */
    public $Position;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Errors;
}
