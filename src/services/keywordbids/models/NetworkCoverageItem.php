<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;

class NetworkCoverageItem extends Model
{
    /**
     * @var int Ставка в сетях, соответствующая указанной частоте показа.
     */
    public $Bid;

    /**
     * @var float Частота показа (доля аудитории) в сетях. Указывается в процентах от 0 до 100.
     * @Assert\Count(
     *     min=1,
     *     max=100
     * )
     */
    public $Probability;
}