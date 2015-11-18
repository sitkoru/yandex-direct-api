<?php

namespace directapi\services\adgroups\models;


use directapi\components\Model;
use directapi\services\adgroups\enum\CarrierEnum;
use directapi\services\adgroups\enum\DeviceTypeEnum;

class MobileAppAdGroupUpdate extends Model
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