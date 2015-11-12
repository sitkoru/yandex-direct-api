<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyMaximumConversionRateAdd
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $WeeklySpendLimit;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $GoalId;

    /**
     * @var int
     */
    public $BidCeiling;
}