<?php

namespace directapi\services\ads\models;


use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

abstract class TextAd extends Model implements ICallbackValidation
{
    /**
     * @var string
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
     *     min=1,
     *     max="1024"
     * )
     * @Assert\Url()
     */
    public $Href;

    /**
     * @var \directapi\services\ads\enum\AgeLabelEnum
     * @DirectApiAssert\IsEnum(type="directapi\services\ads\enum\AgeLabelEnum")
     */
    public $AgeLabel;

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
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if (stripos($this->Title, '#') !== false) {
            if (mb_strlen($this->Title) > 35) {
                $context->buildViolation('Заголовок объявления слишком велик')
                    ->atPath('Title')
                    ->addViolation();
            }
        } else {
            if (mb_strlen($this->Title) > 33) {
                $context->buildViolation('Заголовок объявления слишком велик')
                    ->atPath('Title')
                    ->addViolation();
            }
        }

        if (($this->Href === null || $this->Href === '') && (int)$this->VCardId < 1) {
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