<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AdGroupTypesEnum extends Enum
{
    public const TEXT_AD_GROUP = 'TEXT_AD_GROUP';
    public const MOBILE_APP_AD_GROUP = 'MOBILE_APP_AD_GROUP';
    public const DYNAMIC_TEXT_AD_GROUP = 'DYNAMIC_TEXT_AD_GROUP';
    public const CPM_BANNER_AD_GROUP = 'CPM_BANNER_AD_GROUP';
    public const CPM_VIDEO_AD_GROUP = 'CPM_VIDEO_AD_GROUP';
}
