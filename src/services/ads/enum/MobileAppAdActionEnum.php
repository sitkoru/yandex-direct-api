<?php

namespace directapi\services\ads\enum;

use directapi\components\Enum;

class MobileAppAdActionEnum extends Enum
{
    public const DOWNLOAD = 'DOWNLOAD';
    public const GET = 'GET';
    public const INSTALL = 'INSTALL';
    public const MORE = 'MORE';
    public const OPEN = 'OPEN';
    public const UPDATE = 'UPDATE';
    public const PLAY = 'PLAY';
    public const BUY_AUTODETECT = 'BUY_AUTODETECT';
}
