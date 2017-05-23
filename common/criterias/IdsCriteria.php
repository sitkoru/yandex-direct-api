<?php

namespace directapi\common\criterias;

use directapi\components\interfaces\ICriteria;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class IdsCriteria extends Model implements ICriteria
{
    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $Ids;
}