<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class TextAdFieldEnum extends Enum
{
    public const TITLE = 'Title';
    public const TITLE2 = 'Title2';
    public const TEXT = 'Text';
    public const HREF = 'Href';
    public const DISPLAY_DOMAIN = 'DisplayDomain';
    public const DISPLAY_URL_PATH = 'DisplayUrlPath';
    public const DISPLAY_URL_PATH_MODERATION = 'DisplayUrlPathModeration';
    public const VCARD_ID = 'VCardId';
    public const SITE_LINK_SET_ID = 'SitelinkSetId';
    public const AD_IMAGE_HASH = 'AdImageHash';
    public const VCARD_MODERATION = 'VCardModeration';
    public const SITE_LINKS_MODERATION = 'SitelinksModeration';
    public const AD_IMAGE_MODERATION = 'AdImageModeration';
    public const AD_EXTENSIONS = 'AdExtensions';
    public CONST VIDEO_EXTENSION = 'VideoExtension';
}