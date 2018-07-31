<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class DynamicTextAdFieldEnum extends Enum
{
    public const TEXT = 'Text';
    public const VCARD_ID = 'VCardId';
    public const SITE_LINK_SET_ID = 'SitelinkSetId';
    public const VCARD_MODERATION = 'VCardModeration';
    public const SITE_LINKS_MODERATION = 'SitelinksModeration';
    public const AD_EXTENSIONS = 'AdExtensions';
    public const AD_IMAGE_HASH = 'AdImageHash';
    public const AD_IMAGE_MODERATION = 'AdImageModeration';
}