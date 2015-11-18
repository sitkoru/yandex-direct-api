<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyMaximumConversionRateAdd extends Model
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