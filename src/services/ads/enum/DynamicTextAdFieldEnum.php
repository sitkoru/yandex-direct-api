<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class DynamicTextAdFieldEnum extends Enum
{
    const TEXT = 'Text';
    const VCARD_ID = 'VCardId';
    const SITE_LINK_SET_ID = 'SitelinkSetId';
    const VCARD_MODERATION = 'VCardModeration';
    const SITE_LINKS_MODERATION = 'SitelinksModeration';
    const AD_EXTENSIONS = 'AdExtensions';
    const AD_IMAGE_HASH = 'AdImageHash';
    const AD_IMAGE_MODERATION = 'AdImageModeration';
}