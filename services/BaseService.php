<?php

namespace directapi\services;

use ArrayObject;
use directapi\common\criterias\IdsCriteria;
use directapi\common\results\ActionResult;
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
        return $this->service->call(static::getName(), $method, $params);
    }

    /**
     * @param array $params
     * @return ActionResult[]
     */
    protected function doAdd($params)
    {
        $response = $this->call('add', $params);
        $result = $this->mapArray($response->AddResults, ActionResult::class);
        return $result;
    }

    /**
     * @param array  $params
     * @param string $paramName
     * @param string $class
     * @return array
     */
    protected function doGet(array $params, $paramName, $class)
    {
        $response = $this->call('get', $params);
        $items = $this->mapArray($response->$paramName, $class);
        return $items;
    }

    /**
     * @param array $params
     * @return ActionResult[]
     */
    protected function doUpdate($params)
    {
        $response = $this->call('update', $params);
        $result = $this->mapArray($response->UpdateResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    protected function delete(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('delete', $params);
        $result = $this->mapArray($response->DeleteResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    protected function suspend(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('suspend', $params);
        $result = $this->mapArray($response->SuspendResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    protected function resume(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('resume', $params);
        $result = $this->mapArray($response->ResumeResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    protected function archive(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('archive', $params);
        $result = $this->mapArray($response->ArchiveResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    protected function unarchive(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('unarchive', $params);
        $result = $this->mapArray($response->UnarchiveResults, ActionResult::class);
        return $result;
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