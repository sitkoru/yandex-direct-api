<?php
namespace directapi\services\keywordbids\models;

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