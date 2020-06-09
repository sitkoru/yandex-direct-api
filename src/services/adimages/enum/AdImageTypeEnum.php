<?php

namespace directapi\services\adimages\enum;

use directapi\components\Enum;

class AdImageTypeEnum extends Enum
{
    public const REGULAR = 'REGULAR';
    public const WIDE = 'WIDE';
    public const FIXED_IMAGE = 'FIXED_IMAGE';
    public const SMALL = 'SMALL';
    public const UNFIT = 'UNFIT';
}
