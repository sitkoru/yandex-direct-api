<?php

namespace directapi\services\sitelinks\models;

use directapi\components\Model;

class SitelinksSetGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var Sitelink[]
     */
    public $Sitelinks;
}