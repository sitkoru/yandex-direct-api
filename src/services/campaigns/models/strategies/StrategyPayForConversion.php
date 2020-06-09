<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyPayForConversion extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Cpa;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $GoalId;

    /**
     * @var int
     */
    public $WeeklySpendLimit;
}
