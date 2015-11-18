<?php

namespace directapi\services\bids\models;


use directapi\components\Model;

class AuctionBidItem extends Model
{
    /**
     * @var string Позиция показа: Pmn, где
     * m — номер блока (1 — спецразмещение, 2 — блок гарантированных показов);
     * n — номер позиции в рамках блока.
     */
    public $Position;

    /**
     * @var int Минимальная ставка за указанную позицию.
     */
    public $Bid;

    /**
     * @var int Списываемая цена для указанной позиции.
     */
    public $Price;
}