<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpaPerCampaign extends Model
{
    /**
     * @var int
     */
    public $AverageCpa;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AverageCpc;

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
