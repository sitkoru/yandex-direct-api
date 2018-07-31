<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageRoiAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $ReserveReturn;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $RoiCoef;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $GoalId;

    /**
     * @var int
     */
    public $WeeklySpendLimit;

    /**
     * @var int
     */
    public $BidCeiling;

    /**
     * @var int
     * @Assert\Range(
     *     min=0,
     *     max=100000000
     * )
     */
    public $Profitability;
}