<?php

namespace directapi\services\ads\models;

use directapi\components\interfaces\ICallbackValidation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdAddItem implements ICallbackValidation
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