<?php

namespace directapi\services\ads\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppAdFeatureItem extends Model
{
    /**
     * @var \directapi\services\ads\enum\MobileAppFeatureEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\MobileAppFeatureEnum")
     */
    public $Feature;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Enabled;
}
