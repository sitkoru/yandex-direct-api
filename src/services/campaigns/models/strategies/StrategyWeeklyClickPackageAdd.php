<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyWeeklyClickPackageAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $ClicksPerWeek;

    /**
     * @var int
     */
    public $AverageCpc;

    /**
     * @var int
     */
    public $BidCeiling;
}
