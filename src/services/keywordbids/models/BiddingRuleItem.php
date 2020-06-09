<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class BiddingRuleItem extends Model
{
    /**
     * @Assert\Valid()
     *
     * @var SearchByTrafficVolume
     */
    public $SearchByTrafficVolume;

    /**
     * @Assert\Valid()
     *
     * @var NetworkByCoverage
     */
    public $NetworkByCoverage;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->SearchByTrafficVolume && !$this->NetworkByCoverage) {
            $context->buildViolation('Должно быть указано одно из следующих значений: SearchByTrafficVolume, NetworkByCoverage')
                ->atPath('SearchByTrafficVolume')
                ->atPath('NetworkByCoverage')
                ->addViolation();
        }
    }
}
