<?php

namespace directapi\components\interfaces;

use directapi\DirectApiRequest;
use directapi\DirectApiResponse;

interface IQueryLogger
{
    public function logRequest(DirectApiRequest $request, DirectApiResponse $response);
}