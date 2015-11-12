<?php
namespace directapi\services\campaigns\models;

use Symfony\Component\Validator\Constraints as Assert;

class Notification
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