<?php

namespace directapi\services\adgroups\models;


use directapi\components\Model;

class MobileAppAdGroupUpdate extends Model
{
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
}