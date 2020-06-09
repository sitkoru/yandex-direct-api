<?php

namespace directapi\services\campaigns\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Notification extends Model
{
    /**
     * @var SmsSettings
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\SmsSettings")
     */
    public $SmsSettings;

    /**
     * @var EmailSettings
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\EmailSettings")
     */
    public $EmailSettings;
}
