<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class TextAdFieldEnum extends Enum
{
    const Title = 'Title';
    const Text = 'Text';
    const Href = 'Href';
    const DisplayDomain = 'DisplayDomain';
    const Mobile = 'Mobile';
    const VCardId = 'VCardId';
    const SitelinkSetId = 'SitelinkSetId';
    const AdImageHash = 'AdImageHash';
    const VCardModeration = 'VCardModeration';
    const SitelinksModeration = 'SitelinksModeration';
    const AdImageModeration = 'AdImageModeration';
}