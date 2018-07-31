<?php

namespace directapi\services\ads\enum;


use directapi\components\Enum;

class AdSubtypeEnum extends Enum
{
    public const NONE = 'NONE';
    public const TEXT_IMAGE_AD = 'TEXT_IMAGE_AD';
    public const TEXT_AD_BUILDER_AD = 'TEXT_AD_BUILDER_AD';
    public const MOBILE_APP_IMAGE_AD = 'MOBILE_APP_IMAGE_AD';
    public const MOBILE_APP_AD_BUILDER_AD = 'MOBILE_APP_AD_BUILDER_AD';
}