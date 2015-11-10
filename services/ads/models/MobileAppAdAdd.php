<?php

namespace directapi\services\ads\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\services\ads\enum\AgeLabelEnum;
use directapi\services\ads\enum\MobileAppAdActionEnum;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppAdAdd
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 33
     * )
     */
    public $Title;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 75
     * )
     */
    public $Text;

    /**
     * @var string
     * @Assert\Length(
     *      max = 1024
     * )
     */
    public $TrackingUrl;

    /**
     * @var MobileAppAdFeatureItem[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\ads\MobileAppAdFeatureItem")
     */
    public $Features;

    /**
     * @var AgeLabelEnum
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\AgeLabelEnum")
     */
    public $AgeLabel;

    /**
     * @var MobileAppAdActionEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\MobileAppAdActionEnum")
     */
    public $Action;
}