<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyCpMaximumImpressions extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AverageCpm;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $SpendLimit;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $StartDate;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $EndDate;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     */
    public $AutoContinue;
}
