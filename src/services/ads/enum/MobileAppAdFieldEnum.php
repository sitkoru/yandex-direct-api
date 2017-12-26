<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class MobileAppAdFieldEnum extends Enum
{
    const TITLE = 'Title';
    const TEXT = 'Text';
    const FEATURES = 'Features';
    const TRACKIN_GURL = 'TrackingUrl';
    const ACTION = 'Action';
    const AD_IMAGE_HASH = 'AdImageHash';
    const AD_IMAGE_MODERATION = 'AdImageModeration';
    const VCARD_ID = 'VCardId';
    const VCARD_MODERATION = 'VCardModeration';
    const SITELINK_SET_ID = 'SitelinkSetId';
    const SITELINKS_MODERATION = 'SitelinksModeration';
    const AD_EXTENSIONS = 'AdExtensions';
}