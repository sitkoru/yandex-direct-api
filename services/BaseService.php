<?php

namespace directapi\services;

use ArrayObject;
use directapi\DirectApiService;

abstract class BaseService
{
    abstract protected function getName();

    /**
     * @var DirectApiService
     */
    private $service;

    public function __construct(DirectApiService $service)
    {
        $this->service = $service;
    }

    protected function call($method, $params)
    {
        return $this->service->call($this->getName(), $method, $params);
    }

    /**
     * @param $data
     * @param $class
     * @return object
     * @throws \JsonMapper_Exception
     */
    protected function map($data, $class)
    {
        return $this->service->getMapper()->map($data, new $class());
    }

    /**
     * @param $data
     * @param $class
     * @return array
     */
    protected function mapArray($data, $class)
    {
        return $this->service->getMapper()->mapArray($data, new ArrayObject(), $class);
    }
}