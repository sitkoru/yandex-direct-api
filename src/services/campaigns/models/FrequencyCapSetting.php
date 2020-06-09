<?php


namespace directapi\services\campaigns\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class FrequencyCapSetting extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Impressions;

    /**
     * @var int
     */
    public $PeriodDays;
}
