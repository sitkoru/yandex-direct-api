<?php

namespace directapi\services\ads\models;

use directapi\components\constraints as DirectApiAssert;

class TextAdAdd extends TextAd
{
    /**
     * @var \directapi\common\enum\YesNoEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Mobile;
}
