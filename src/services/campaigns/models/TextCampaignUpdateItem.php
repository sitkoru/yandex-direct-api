<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;
use directapi\services\campaigns\models\TextCampaignItem;

class TextCampaignUpdateItem extends TextCampaignItem
{
    /**
     * @var PriorityGoalsUpdateSetting
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\PriorityGoalsUpdateSetting")
     */
    public $PriorityGoals;
}