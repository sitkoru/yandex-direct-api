<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class MobileAppAdUpdate extends Model
{
    /**
     * @var string
     * @Assert\Length(
     *     max="33"
     * )
     */
    public $Title;

    /**
     * @var string
     * @Assert\Length(
     *     max="75"
     * )
     */
    public $Text;

    /**
     * @var string
     * @Assert\Length(
     *     max="1024"
     * )
     */
    public $TrackingUrl;

    /**
     * @var MobileAppAdFeatureItem[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\ads\MobileAppAdFeatureItem")
     */
    public $Features;

    /**
     * @var \directapi\services\ads\enum\AgeLabelEnum
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\AgeLabelEnum")
     */
    public $AgeLabel;

    /**
     * @var \directapi\services\ads\enum\MobileAppAdActionEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\MobileAppAdActionEnum")
     */
    public $Action;

    /**
     * @var string
     */
    public $AdImageHash;
}