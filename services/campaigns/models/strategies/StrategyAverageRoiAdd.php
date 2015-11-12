<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageRoiAdd
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