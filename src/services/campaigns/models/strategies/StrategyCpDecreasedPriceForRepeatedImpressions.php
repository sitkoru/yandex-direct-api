<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyCpDecreasedPriceForRepeatedImpressions extends Model
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
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     */
    public $AutoContinue;
}
