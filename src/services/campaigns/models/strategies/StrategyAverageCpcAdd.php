<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyAverageCpcAdd extends Model
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
