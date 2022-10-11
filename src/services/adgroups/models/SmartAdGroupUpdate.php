<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class SmartAdGroupUpdate extends Model
{
    protected static $nillableProperties = [
        'AdTitleSource',
        'AdBodySource',
    ];

    /**
     * @var string
     */
    public $AdTitleSource;

    /**
     * @var string
     */
    public $AdBodySource;
}
