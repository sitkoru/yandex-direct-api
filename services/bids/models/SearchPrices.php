<?php
namespace directapi\services\bids\models;

use directapi\services\bids\enum\PositionEnum;

class SearchPrices
{
    /**
     * @var PositionEnum
     */
    public $Position;

    /**
     * @var int
     */
    public $Price;
}