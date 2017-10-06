<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class RelevantKeywordsSetting extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $BudgetPercent;

    /**
     * @var \directapi\services\campaigns\enum\RelevantKeywordsModeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\RelevantKeywordsModeEnum")
     */
    public $Mode;
}