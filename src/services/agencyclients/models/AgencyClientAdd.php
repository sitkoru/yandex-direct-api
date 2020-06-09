<?php

namespace directapi\services\agencyclients\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AgencyClientAdd extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $Login;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $FirstName;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $LastName;

    /**
     * @var \directapi\common\enum\CurrencyEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\CurrencyEnum")
     */
    public $Currency;

    /**
     * @var GrantItem[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\agencyclients\models\GrantItem")
     */
    public $Grants;

    /**
     * @var NotificationAdd
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\agencyclients\models\NotificationAdd")
     */
    public $Notification;

    /**
     * @var ClientSettingAddItem[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\ClientSettingAddItem")
     */
    public $Settings;
}
