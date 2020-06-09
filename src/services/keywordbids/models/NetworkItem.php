<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class NetworkItem extends Model
{
    /**
     * @var int Ставка в сетях, назначенная рекламодателем. Для автотаргетинга параметр не возвращается.
     */
    public $Bid;

    /**
     * @Assert\Valid()
     *
     * @var CoverageItem
     */
    public $Coverage;
}
