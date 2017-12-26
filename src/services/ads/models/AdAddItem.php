<?php

namespace directapi\services\ads\models;

use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var int
     * @Assert\NotBlank()
     */
    public $AdGroupId;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->TextAd && !$this->MobileAppAd) {
            $context->buildViolation('Необходимо указать TextAd либо MobileAppAd')
                ->atPath('TextAd')
                ->atPath('MobileAppAd')
                ->addViolation();
        }
    }
}