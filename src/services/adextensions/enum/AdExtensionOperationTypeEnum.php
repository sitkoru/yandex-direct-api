<?php

namespace directapi\services\adextensions\enum;


use directapi\components\Enum;

class AdExtensionOperationTypeEnum extends Enum
{
    public const ADD = 'ADD';
    public const SET = 'SET';
    public const REMOVE = 'REMOVE';
}