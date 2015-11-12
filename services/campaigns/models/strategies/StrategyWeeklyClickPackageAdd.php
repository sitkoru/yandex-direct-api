<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyWeeklyClickPackageAdd
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