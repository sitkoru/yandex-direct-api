<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class DynamicTextAdFieldEnum extends Enum
{
    const Text = 'Text';
    const VCardId = 'VCardId';
    const SitelinkSetId = 'SitelinkSetId';
    const VCardModeration = 'VCardModeration';
    const SitelinksModeration = 'SitelinksModeration';
    const AdExtensions = 'AdExtensions';
}