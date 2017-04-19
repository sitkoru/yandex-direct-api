<?php

namespace directapi\components\interfaces;

use Symfony\Component\Validator\Context\ExecutionContextInterface;

interface ICallbackValidation
{
    public function isValid(ExecutionContextInterface $context);
}