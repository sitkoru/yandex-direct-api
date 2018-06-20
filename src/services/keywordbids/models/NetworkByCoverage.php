<?php

namespace directapi\services\keywordbids\models;


use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class NetworkByCoverage extends Model
{
    /**
     * @var int Желаемая частота показа (доля аудитории) в сетях. Указывается в процентах от 1 до 100.
     * @Assert\Count(
     *     min=1,
     *     max=100
     * )
     */
    public $TargetCoverage;

    /**
     * @var int Процент надбавки от 0 до 1000. Если не задан, надбавка не рассчитывается.
     * @Assert\Count(
     *     min=0,
     *     max=1000
     * )
     */
    public $IncreasePercent;

    /**
     * @var int Ограничение на ставку, умноженное на 1 000 000. Целое число.
     */
    public $BidCeiling;
}