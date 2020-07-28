<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;

class SearchItem extends Model
{
    /**
     * Ставка на поиске, назначенная рекламодателем.
     *
     * @var int
     */
    public $Bid;

    /**
     *	Ставки и списываемые цены на поиске, соответствующие различным объемам трафика для данной фразы.
     *
     * @var AuctionBidsItem|null
     */
    public $AuctionBids;
}
