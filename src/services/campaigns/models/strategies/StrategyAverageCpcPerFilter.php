<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpcPerFilter extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FilterAverageCpc;

    /**
     * @var int
     */
    public $WeeklySpendLimit;

    /**
     * @var int
     */
    public $BidCeiling;
}
