<?php

namespace directapi\services\ads\models;

use directapi\components\interfaces\ICallbackValidation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class AdUpdateItem implements ICallbackValidation
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