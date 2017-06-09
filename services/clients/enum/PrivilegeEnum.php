<?php

namespace directapi\services\clients\enum;


use directapi\components\Enum;

class PrivilegeEnum extends Enum
{
    const EDIT_CAMPAIGNS = 'EDIT_CAMPAIGNS';
    const IMPORT_XLS = 'IMPORT_XLS';
    const TRANSFER_MONEY = 'TRANSFER_MONEY';
}