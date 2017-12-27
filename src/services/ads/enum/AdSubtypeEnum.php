<?php

namespace directapi\services\ads\enum;


use directapi\components\Enum;

class AdSubtypeEnum extends Enum
{
    const NONE = 'NONE';
    const TEXT_IMAGE_AD = 'TEXT_IMAGE_AD';
    const TEXT_AD_BUILDER_AD = 'TEXT_AD_BUILDER_AD';
    const MOBILE_APP_IMAGE_AD = 'MOBILE_APP_IMAGE_AD';
    const MOBILE_APP_AD_BUILDER_AD = 'MOBILE_APP_AD_BUILDER_AD';
}