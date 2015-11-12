<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpiAdd
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