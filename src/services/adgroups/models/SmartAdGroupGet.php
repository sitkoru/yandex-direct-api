<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class SmartAdGroupGet extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FeedId;

    /**
     * @var string
     */
    public $AdTitleSource;

    /**
     * @var string
     */
    public $AdBodySource;
}
