<?php

namespace directapi\services\ads\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\ads\enum\MobileAppFeatureEnum;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppAdFeatureItem
{
    /**
     * @var MobileAppFeatureEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\MobileAppFeatureEnum")
     */
    public $Feature;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Enabled;
}