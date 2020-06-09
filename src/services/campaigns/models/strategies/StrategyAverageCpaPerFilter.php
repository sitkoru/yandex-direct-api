<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpaPerFilter extends Model
{
    /**
     * @var int
     */
    public $FilterAverageCpa;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FilterAverageCpc;

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
}
