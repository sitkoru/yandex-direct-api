<?php

namespace directapi\services\adgroups\models;


use directapi\common\containers\ArrayOfString;

class AdGroupUpdateItem
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var int[]
     */
    public $RegionIds;

    /**
     * @var ArrayOfString
     */
    public $NegativeKeywords;

    /**
     * @var MobileAppAdGroupUpdate
     */
    public $MobileAppAdGroup;
}