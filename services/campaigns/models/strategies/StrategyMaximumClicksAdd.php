<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class   StrategyMaximumClicksAdd
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $WeeklySpendLimit;
    /**
     * @var int
     */
    public $BidCeiling;
}