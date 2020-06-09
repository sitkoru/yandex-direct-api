<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class AdGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var \directapi\services\ads\enum\AdStatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $StatusClarification;

    /**
     * @var \directapi\common\enum\StateEnum
     */
    public $State;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $AdCategories;

    /**
     * @var \directapi\services\ads\enum\AgeLabelEnum
     */
    public $AgeLabel;

    /**
     * @var \directapi\services\ads\enum\AdTypeEnum
     */
    public $Type;

    /**
     * @var \directapi\services\ads\enum\AdSubtypeEnum
     */
    public $Subtype;

    /**
     * @var TextAdGet
     */
    public $TextAd;

    /**
     * @var MobileAppAdGet
     */
    public $MobileAppAd;

    /**
     * @var DynamicTextAdGet
     */
    public $DynamicTextAd;

    /**
     * @var TextImageAdGet
     */
    public $TextImageAd;

    /**
     * @var MobileAppImageAdGet
     */
    public $MobileAppImageAd;

    /**
     * @var TextAdBuilderAdGet
     */
    public $TextAdBuilderAd;

    /**
     * @var MobileAppAdBuilderAdGet
     */
    public $MobileAppAdBuilderAd;

    /**
     * @var CpcVideoAdBuilderAdGet
     */
    public $CpcVideoAdBuilderAd;

    /**
     * @var CpmBannerAdBuilderAdGet
     */
    public $CpmBannerAdBuilderAd;

    /**
     * @var CpmVideoAdBuilderAdGet
     */
    public $CpmVideoAdBuilderAd;

    /**
     * @var SmartAdBuilderAdGet
     */
    public $SmartAdBuilderAd;

    /**
     * @var int
     */
    public $LimitedBy;

    public function getDescription(): ?string
    {
        if ($this->TextAd) {
            return $this->TextAd->getDescription();
        }

        if ($this->MobileAppAd) {
            return $this->MobileAppAd->getDescription();
        }

        if ($this->DynamicTextAd) {
            return $this->DynamicTextAd->getDescription();
        }

        if ($this->TextImageAd) {
            return $this->TextImageAd->getDescription();
        }

        if ($this->MobileAppImageAd) {
            return $this->MobileAppImageAd->getDescription();
        }

        if ($this->TextAdBuilderAd) {
            return $this->TextAdBuilderAd->getDescription();
        }

        if ($this->MobileAppAdBuilderAd) {
            return $this->MobileAppAdBuilderAd->getDescription();
        }

        if ($this->SmartAdBuilderAd) {
            return $this->SmartAdBuilderAd->getDescription();
        }

        return null;
    }
}
