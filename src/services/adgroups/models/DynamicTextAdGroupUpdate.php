<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class DynamicTextAdGroupUpdate extends Model
{
    /**
     * @var string
     * @Assert\Length(
     *      max = 100
     * )
     */
    public $DomainUrl;
}
