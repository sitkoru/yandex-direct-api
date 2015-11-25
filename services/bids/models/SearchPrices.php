<?php
namespace directapi\services\bids\models;

use directapi\components\Model;

class SearchPrices extends Model
{
    /**
     * @var \directapi\services\bids\enum\PositionEnum
     */
    public $Position;

    /**
     * @var int
     */
    public $Price;
}