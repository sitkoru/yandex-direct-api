<?php

namespace directapi\services\ads\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdAddItem extends Model implements ICallbackValidation
{
    /**
     * @var TextAdAdd
     */
    public $TextAd;

    /**
     * @var MobileAppAdAdd
     */
    public $MobileAppAd;

    /**
     * @var DynamicTextAdAdd
     */
    public $DynamicTextAd;

    /**
     * @var TextImageAdAdd
     */
    public $TextImageAd;

    /**
     * @var MobileAppImageAdAdd
     */
    public $MobileAppImageAd;

    /**
     * @var TextAdBuilderAdAdd
     */
    public $TextAdBuilderAd;

    /**
     * @var MobileAppAdBuilderAdAdd
     */
    public $MobileAppAdBuilderAd;

    /**
     * @var CpcVideoAdBuilderAdAdd
     */
    public $CpcVideoAdBuilderAd;

    /**
     * @var CpmBannerAdBuilderAdAdd
     */
    public $CpmBannerAdBuilderAd;

    /**
     * @var CpmVideoAdBuilderAdAdd
     */
    public $CpmVideoAdBuilderAd;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AdGroupId;

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
