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
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->TextAd && !$this->MobileAppAd) {
            $context->buildViolation('Необходимо указать TextAd либо MobileAppAd')
                ->atPath('TextAd')
                ->atPath('MobileAppAd')
                ->addViolation();
        }
    }
}