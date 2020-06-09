<?php

namespace directapi\services\sitelinks\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SitelinksSetAddItem extends Model implements ICallbackValidation
{
    /**
     * @var Sitelink[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\sitelinks\models\Sitelink")
     * @Assert\Count(
     *     min=1,
     *     max=4
     * )
     */
    public $Sitelinks;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        $length = 0;
        foreach ($this->Sitelinks as $link) {
            $length += mb_strlen($link->Title);
        }
        if ($length > 66) {
            $context->buildViolation('Суммарная длина текстов всех быстрых ссылок в наборе — не более 66 символов')->atPath('Sitelink')->addViolation();
        }
    }
}
