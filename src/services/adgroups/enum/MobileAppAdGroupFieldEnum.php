<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class MobileAppAdGroupFieldEnum extends Enum
{
    public const STORE_URL = 'StoreUrl';
    public const TARGET_DEVICE_TYPE = 'TargetDeviceType';
    public const TARGET_CARRIER = 'TargetCarrier';
    public const TARGET_OPERATING_SYSTEM_VERSION = 'TargetOperatingSystemVersion';
    public const APP_ICON_MODERATION = 'AppIconModeration';
    public const APP_AVAILABILITY_STATUS = 'AppAvailabilityStatus';
    public const APP_OPERATING_SYSTEM_TYPE = 'AppOperatingSystemType';
}