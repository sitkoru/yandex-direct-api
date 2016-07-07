<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class MobileAppAdGroupFieldEnum extends Enum
{
    const STORE_URL = 'StoreUrl';
    const TARGET_DEVICE_TYPE = 'TargetDeviceType';
    const TARGET_CARRIER = 'TargetCarrier';
    const TARGET_OPERATING_SYSTEM_VERSION = 'TargetOperatingSystemVersion';
    const APP_ICON_MODERATION = 'AppIconModeration';
    const APP_AVAILABILITY_STATUS = 'AppAvailabilityStatus';
    const APP_OPERATING_SYSTEM_TYPE = 'AppOperatingSystemType';
}