<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyMaximumClicksAdd extends Model
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