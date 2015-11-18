<?php

namespace directapi\services\bids\models;


use directapi\components\Model;

class ContextCoverageItem extends Model
{
    /**
     * @var float
     */
    public $Probability;

    /**
     * @var int
     */
    public $Price;
}