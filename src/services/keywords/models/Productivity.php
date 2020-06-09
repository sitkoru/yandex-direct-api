<?php

namespace directapi\services\keywords\models;

use directapi\components\Model;

class Productivity extends Model
{
    /**
     * @var float
     */
    public $Value;

    /**
     * @var int[]
     */
    public $References;
}
