<?php
namespace directapi\services\bids\models;

use directapi\components\Model;
use directapi\services\bids\enum\PositionEnum;

class SearchPrices extends Model
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