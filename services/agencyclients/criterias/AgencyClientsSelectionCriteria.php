<?php

namespace directapi\services\agencyclients\criterias;


use directapi\components\Model;

class AgencyClientsSelectionCriteria extends Model
{
    /**
     * @var string[]
     */
    public $Logins = [];

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Archived;
}