<?php

namespace directapi\services\keywordbids\models;

use Symfony\Component\Validator\Constraints as Assert;

class SearchItem
{
    /**
     * Ставка на поиске, назначенная рекламодателем.
     * @var int
     */
    public $Bid;

    /**
     * Массив ставок и списываемых цен на поиске, соответствующих различным объемам трафика.
     * @var AuctionKeywordBidItem[]|null
     */
    public $AuctionBids;
}