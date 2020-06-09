<?php

namespace directapi\services\adgroups\models;

use directapi\components\Model;

class MobileAppAdGroupGet extends Model
{
    /**
     * @var string
     */
    public $StoreUrl;

    /**
     * @var \directapi\services\adgroups\enum\DeviceTypeEnum[]
     */
    public $TargetDeviceType;

    /**
     * @var \directapi\services\adgroups\enum\CarrierEnum
     */
    public $TargetCarrier;

    /**
     * @var string
     */
    public $TargetOperatingSystemVersion;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $AppIconModeration;

    /**
     * @var \directapi\services\adgroups\enum\MobileOperatingSystemTypeEnum
     */
    public $AppOperatingSystemType;

    /**
     * @var \directapi\services\adgroups\enum\AppAvailabilityStatusEnum
     */
    public $AppAvailabilityStatus;

    public function getDescription(): ?string
    {
        return $this->StoreUrl;
    }
}
