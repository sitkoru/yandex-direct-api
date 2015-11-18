<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\DailyBudgetModeEnum;
use Symfony\Component\Validator\Constraints as Assert;

class DailyBudget extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Amount;

    /**
     * @var DailyBudgetModeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\DailyBudgetModeEnum")
     */
    public $Mode;
}