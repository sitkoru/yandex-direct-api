<?php

namespace directapi\services\ads\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class TextAdAdd
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
     * @var YesNoEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Mobile;

    /**
     * @var string
     */
    public $Href;

    /**
     * @var int
     */
    public $VCardId;

    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var int
     */
    public $SitelinkSetId;

    /**
     * @Assert\Callback()
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (!$this->Href && !$this->VCardId) {
            $context->buildViolation('Необходимо указать Href или VCardId')
                ->atPath('Href')
                ->atPath('VCardId')
                ->addViolation();
        }

        if (!$this->Href && $this->SitelinkSetId) {
            $context->buildViolation('Нельзя указать SitelinkSetId при пустом Href')
                ->atPath('SitelinkSetId')
                ->addViolation();
        }
    }
}