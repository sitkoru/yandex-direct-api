<?php

namespace directapi\services\adimages\enum;

use directapi\components\Enum;

class AdImageFieldEnum extends Enum
{
    const AD_IMAGE_HASH = 'AdImageHash';
    const ORIGINAL_URL = 'OriginalUrl';
    const PREVIEW_URL = 'PreviewUrl';
    const NAME = 'Name';
    const TYPE = 'Type';
    const SUBTYPE = 'Subtype';
    const ASSOCIATED = 'Associated';
}