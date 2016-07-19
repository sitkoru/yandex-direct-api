<?php

namespace directapi\components\interfaces;


interface IQueryLogger
{
    public function logSuccess($service, $method, $params, $price);

    public function logError($service, $method, $params);
}