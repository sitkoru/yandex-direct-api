<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;

class AuctionBidsItem extends Model
{
	/**
	 * Массив ставок и списываемых цен на поиске, соответствующих различным объемам трафика.
	 *
	 * @var AuctionKeywordBidItem[]
	 */
	public $AuctionBidItems;
}
