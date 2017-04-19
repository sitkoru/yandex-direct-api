<?php

namespace directapi\common\criterias;

use directapi\components\interfaces\ICriteria;
use Symfony\Component\Validator\Constraints as Assert;

class IdsCriteria implements ICriteria
{
    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $Ids;
}