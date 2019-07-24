<?php

namespace directapi\services\ads\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdUpdateItem extends Model implements ICallbackValidation
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var TextAdUpdate
     * @Assert\Valid()
     */
    public $TextAd;

    /**
     * @var MobileAppAdUpdate
     * @Assert\Valid()
     */
    public $MobileAppAd;

    /**
     * @var DynamicTextAdUpdate
     * @Assert\Valid()
     */
    public $DynamicTextAd;

    /**
     * @var TextImageAdUpdate
     * @Assert\Valid()
     */
    public $TextImageAd;

    /**
     * @var MobileAppImageAdUpdate
     * @Assert\Valid()
     */
    public $MobileAppImageAd;


    /**
     * @var TextAdBuilderAdUpdate
     * @Assert\Valid()
     */
    public $TextAdBuilderAd;

    /**
     * @var MobileAppAdBuilderAdUpdate
     * @Assert\Valid()
     */
    public $MobileAppAdBuilderAd;

    /**
     * @var CpcVideoAdBuilderAdUpdate
     */
    public $CpcVideoAdBuilderAd;

    /**
     * @var CpmBannerAdBuilderAdUpdate
     */
    public $CpmBannerAdBuilderAd;

    /**
     * @var CpmVideoAdBuilderAdUpdate
     */
    public $CpmVideoAdBuilderAd;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->TextAd &&
            !$this->MobileAppAd &&
            !$this->DynamicTextAd &&
            !$this->TextImageAd &&
            !$this->CpcVideoAdBuilderAd &&
            !$this->CpmBannerAdBuilderAd &&
            !$this->MobileAppImageAd &&
            !$this->MobileAppAdBuilderAd) {
            $context->buildViolation('Пустое объявление')
                ->atPath('TextAd')
                ->atPath('MobileAppAd')
                ->atPath('DynamicTextAd')
                ->atPath('TextImageAd')
                ->atPath('CpcVideoAdBuilderAd')
                ->atPath('CpmBannerAdBuilderAd')
                ->atPath('MobileAppImageAd')
                ->atPath('MobileAppAdBuilderAd')
                ->addViolation();
        }
    }
}
