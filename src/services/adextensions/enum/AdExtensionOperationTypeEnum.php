<?php

namespace directapi\services\adextensions\enum;


use directapi\components\Enum;

class AdExtensionOperationTypeEnum extends Enum
{
    const ADD = 'ADD';
    const SET = 'SET';
    const REMOVE = 'REMOVE';
}