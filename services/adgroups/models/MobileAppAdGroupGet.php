<?php

namespace directapi\services\adgroups\models;

use directapi\common\models\ExtensionModeration;
use directapi\components\Model;
use directapi\services\adgroups\enum\AppAvailabilityStatusEnum;
use directapi\services\adgroups\enum\CarrierEnum;
use directapi\services\adgroups\enum\DeviceTypeEnum;
use directapi\services\adgroups\enum\MobileOperatingSystemTypeEnum;

class MobileAppAdGroupGet extends Model
{
    /**
     * @var string
     */
    public $StoreUrl;

    /**
     * @var DeviceTypeEnum[]
     */
    public $TargetDeviceType;

    /**
     * @var CarrierEnum
     */
    public $TargetCarrier;

    /**
     * @var string
     */
    public $TargetOperatingSystemVersion;

    /**
     * @var ExtensionModeration
     */
    public $AppIconModeration;

    /**
     * @var MobileOperatingSystemTypeEnum
     */
    public $AppOperatingSystemType;

    /**
     * @var AppAvailabilityStatusEnum
     */
    public $AppAvailabilityStatus;
}