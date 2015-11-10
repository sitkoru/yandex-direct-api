<?php

namespace directapi\services\adgroups\models;


use directapi\services\adgroups\enum\CarrierEnum;
use directapi\services\adgroups\enum\DeviceTypeEnum;

class MobileAppAdGroupUpdate
{
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
}