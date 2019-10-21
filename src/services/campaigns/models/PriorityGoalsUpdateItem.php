<?php

namespace directapi\services\campaigns\models;

use directapi\components\Model;
use directapi\services\campaigns\models\PriorityGoalsItem;

class PriorityGoalsUpdateItem extends PriorityGoalsItem
{
    /**
     * @var string
     */
    public $Operation = 'SET';

}