<?php

namespace directapi\services\keywords\models;

use directapi\components\Model;

class StatisticsItem extends Model
{
	/**
	 * Количество кликов по всем объявлениям группы, показанным по данной ключевой фразе или автотаргетингу.
	 *
	 * @var int
	 */
	public $Clicks;

	/**
	 * Количество показов всех объявлений группы по данной фразе или автотаргетингу.
	 *
	 * @var int
	 */
	public $Impressions;
}
