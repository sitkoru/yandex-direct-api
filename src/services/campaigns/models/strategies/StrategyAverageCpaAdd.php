<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpaAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AverageCpa;

    /**
     * @var int
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