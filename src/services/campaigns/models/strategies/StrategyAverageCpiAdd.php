<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpiAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AverageCpi;
    /**
     * @var int
     */
    public $WeeklySpendLimit;
    /**
     * @var int
     */
    public $BidCeiling;
}