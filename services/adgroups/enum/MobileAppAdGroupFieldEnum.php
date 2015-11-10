<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class MobileAppAdGroupFieldEnum extends Enum
{
    const StoreUrl = 'StoreUrl';
    const TargetDeviceType = 'TargetDeviceType';
    const TargetCarrier = 'TargetCarrier';
    const TargetOperatingSystemVersion = 'TargetOperatingSystemVersion';
    const AppIconModeration = 'AppIconModeration';
    const AppAvailabilityStatus = 'AppAvailabilityStatus';
    const AppOperatingSystemType = 'AppOperatingSystemType';
}