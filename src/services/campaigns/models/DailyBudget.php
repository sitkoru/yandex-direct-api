<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class DailyBudget extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Amount;

    /**
     * @var \directapi\services\campaigns\enum\DailyBudgetModeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\DailyBudgetModeEnum")
     */
    public $Mode;
}
