<?php

namespace directapi\services\ads\models;


use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class TextAdAdd extends TextAd
{
    /**
     * @var \directapi\common\enum\YesNoEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Mobile;

}