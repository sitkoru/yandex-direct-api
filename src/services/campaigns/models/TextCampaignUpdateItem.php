<?php

namespace directapi\services\campaigns\models;

use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignUpdateItem extends TextCampaignItem
{
    /**
     * @var PriorityGoalsUpdateSetting
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\PriorityGoalsUpdateSetting")
     */
    public $PriorityGoals;
}
