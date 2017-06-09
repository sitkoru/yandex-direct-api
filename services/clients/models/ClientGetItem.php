<?php

namespace directapi\services\clients\models;


use directapi\common\enum\CurrencyEnum;
use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use directapi\services\campaigns\models\Notification;

class ClientGetItem extends Model
{
    /**
     * @var float
     */
    public $AccountQuality;

    /**
     * @var YesNoEnum
     */
    public $Archived;

    /**
     * @var int
     */
    public $ClientId;

    /**
     * @var string
     */
    public $ClientInfo;

    /**
     * @var int
     */
    public $CountryId;

    /**
     * @var CurrencyEnum
     */
    public $Currency;

    /**
     * @var string
     */
    public $CreatedAt;

    /**
     * @var Grant[]
     */
    public $Grants;

    /**
     * @var string
     */
    public $Login;

    /**
     * @var Notification
     */
    public $Notification;

    /**
     * @var int
     */
    public $OverdraftSumAvailable;

    /**
     * @var string
     */
    public $Phone;

    /**
     * @var Representative[]
     */
    public $Representatives;

    /**
     * @var ClientRestrictionItem[]
     */
    public $Restrictions;

    /**
     * @var ClientSettingItemGet[]
     */
    public $Settings;

    /**
     * @var string
     */
    public $Type;

    /**
     * @var float
     */
    public $VatRate;
}