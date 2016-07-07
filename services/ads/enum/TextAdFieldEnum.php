<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class TextAdFieldEnum extends Enum
{
    const TITLE = 'Title';
    const TEXT = 'Text';
    const HREF = 'Href';
    const DISPLAY_DOMAIN = 'DisplayDomain';
    const MOBILE = 'Mobile';
    const VCARD_ID = 'VCardId';
    const SITE_LINK_SET_ID = 'SitelinkSetId';
    const AD_IMAGE_HASH = 'AdImageHash';
    const VCARD_MODERATION = 'VCardModeration';
    const SITE_LINKS_MODERATION = 'SitelinksModeration';
    const AD_IMAGE_MODERATION = 'AdImageModeration';
}