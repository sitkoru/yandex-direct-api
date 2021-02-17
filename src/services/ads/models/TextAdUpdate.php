<?php

namespace directapi\services\ads\models;

class TextAdUpdate extends TextAd
{
    protected static $nillableProperties = [
        'Title2',
        'Href',
        'DisplayUrlPath',
        'VCardId',
        'AdImageHash',
        'SitelinkSetId',
        'CalloutSetting',
        'PriceExtension',
        'TurboPageId',
        'BusinessId',
    ];

    /**
     * @var \directapi\services\adextensions\models\AdExtensionSetting
     */
    public $CalloutSetting;
}
