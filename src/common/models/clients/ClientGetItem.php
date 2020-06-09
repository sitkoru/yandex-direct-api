<?php

namespace directapi\common\models\clients;

use directapi\components\Model;

class ClientGetItem extends Model
{
    /**
     * @var float
     */
    public $AccountQuality;

    /**
     * @var \directapi\common\enum\YesNoEnum
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
     * @var \directapi\common\enum\CurrencyEnum
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
     * @var \directapi\services\campaigns\models\Notification
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
