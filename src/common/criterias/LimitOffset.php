<?php

namespace directapi\common\criterias;


use directapi\components\Model;

class LimitOffset extends Model
{
    /**
     * @var int
     */
    public $Limit;
    /**
     * @var int
     */
    public $Offset;
}