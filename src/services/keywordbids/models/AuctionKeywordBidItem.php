<?php

namespace directapi\services\keywordbids\models;


use directapi\components\Model;

class AuctionKeywordBidItem extends Model
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