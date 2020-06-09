<?php

namespace directapi\common\enum\clients;

use directapi\components\Enum;

class PrivilegeEnum extends Enum
{
    public const EDIT_CAMPAIGNS = 'EDIT_CAMPAIGNS';
    public const IMPORT_XLS = 'IMPORT_XLS';
    public const TRANSFER_MONEY = 'TRANSFER_MONEY';
}
