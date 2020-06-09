<?php

namespace directapi\services\adimages\enum;

use directapi\components\Enum;

class AdImageFieldEnum extends Enum
{
    public const AD_IMAGE_HASH = 'AdImageHash';
    public const ORIGINAL_URL = 'OriginalUrl';
    public const PREVIEW_URL = 'PreviewUrl';
    public const NAME = 'Name';
    public const TYPE = 'Type';
    public const SUBTYPE = 'Subtype';
    public const ASSOCIATED = 'Associated';
}
