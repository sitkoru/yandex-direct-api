<?php

namespace directapi\services\keywordbids\models;


use directapi\components\Model;

class AuctionKeywordBidItem extends Model
{
    /**
     * @var int Объем трафика.
     */
    public $TrafficVolume;

    /**
     * @var int Минимальная ставка за указанную позицию.
     */
    public $Bid;

    /**
     * @var int Списываемая цена для указанной позиции.
     */
    public $Price;
}