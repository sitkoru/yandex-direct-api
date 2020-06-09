<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class StrategyWbMaximumImpressions extends Model
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
}
