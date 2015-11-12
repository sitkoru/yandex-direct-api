<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpcAdd
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AverageCpc;

    /**
     * @var int
     */
    public $WeeklySpendLimit;
}