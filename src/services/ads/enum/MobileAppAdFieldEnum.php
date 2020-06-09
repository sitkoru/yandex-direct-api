<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class MobileAppAdFieldEnum extends Enum
{
    public const TITLE = 'Title';
    public const TEXT = 'Text';
    public const FEATURES = 'Features';
    public const TRACKING_URL = 'TrackingUrl';
    public const ACTION = 'Action';
    public const AD_IMAGE_HASH = 'AdImageHash';
    public const AD_IMAGE_MODERATION = 'AdImageModeration';
}
