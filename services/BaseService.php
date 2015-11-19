<?php

namespace directapi\services;

use directapi\common\criterias\IdsCriteria;
use directapi\common\results\ActionResult;
use directapi\DirectApiService;

abstract class BaseService
{
    abstract protected function getName();

    private static $unitsCostTable = [
        'adgroups'     => [
            'add'    => [20, 20],
            'delete' => [10, 0],
            'get'    => [15, 1],
            'update' => [20, 20],
        ],
        'ads'          => [
            'add'       => [20, 20],
            'archive'   => [15, 0],
            'delete'    => [10, 0],
            'get'       => [15, 1],
            'moderate'  => [15, 0],
            'resume'    => [15, 0],
            'suspend'   => [15, 0],
            'unarchive' => [40, 0],
            'update'    => [20, 20],

        ],
        'bids'         => [
            'get'     => [15, 1],
            'set'     => [25, 0],
            'setAuto' => [25, 0],

        ],
        'bidmodifiers' => [
            'add'    => [15, 1],
            'delete' => [15, 0],
            'get'    => [1, 0],
            'set'    => [2, 0],
            'toggle' => [15, 0],

        ],
        'campaigns'    => [
            'add'       => [10, 5],
            'archive'   => [10, 5],
            'delete'    => [10, 2],
            'get'       => [1, 1],
            'resume'    => [10, 5],
            'suspend'   => [10, 5],
            'unarchive' => [10, 5],
            'update'    => [10, 3],

        ],
        'changes'      => [
            'check'             => [1, 0],
            'checkCampaigns'    => [1, 0],
            'checkDictionaries' => [1, 0],

        ],
        'keywords'     => [
            'add'     => [20, 2],
            'delete'  => [10, 1],
            'get'     => [15, 1],
            'resume'  => [15, 0],
            'suspend' => [15, 0],
            'update'  => [20, 2],
        ],
        'sitelinks'    => [
            'add'    => [20, 20],
            'delete' => [10, 0],
            'get'    => [15, 1],
        ],
        'vcards'       => [
            'add'    => [20, 20],
            'delete' => [10, 0],
            'get'    => [15, 1],
        ],
    ];

    private static $objectLimits = [
        'adgroups'     => [
            'add'    => 1000,
            'get'    => 10000,
            'update' => 1000,
        ],
        'ads'          => [
            'add'    => 1000,
            'get'    => 10000,
            'update' => 1000,

        ],
        'bids'         => [
            'get' => 10000,

        ],
        'bidmodifiers' => [
            'add' => 100,

        ],
        'campaigns'    => [
            'add'       => 10,
            'archive'   => 1000,
            'delete'    => 1000,
            'get'       => 1000,
            'resume'    => 1000,
            'suspend'   => 1000,
            'unarchive' => 1000,
            'update'    => 10,

        ],
        'keywords'     => [
            'add'    => 1000,
            'delete' => 10000,
            'get'    => 10000,
            'update' => 1000,
        ],
        'sitelinks'    => [
            'add' => 1000,
            'get' => 10000,
        ],
        'vcards'       => [
            'add' => 1000,
            'get' => 10000,
        ],
    ];

    /**
     * @param $method
     * @param $objectsCount
     * @return float|int
     */
    public function count($method, $objectsCount)
    {
        $cost = 0;
        $name = static::getName();
        if (array_key_exists($name, self::$unitsCostTable)) {
            $servicesCost = self::$unitsCostTable[$name];
            if (array_key_exists($method, $servicesCost)) {
                list($callCost, $objectCost) = $servicesCost[$method];
                $calls = 1;
                if (isset(self::$objectLimits[$name][$method])) {
                    $calls = ceil($objectsCount / self::$objectLimits[$name][$method]);
                }
                $cost = $calls * $callCost;
                if ($objectCost) {
                    $cost += $objectsCount * $objectCost;
                }
            }
        }
        return $cost;
    }

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
        $result = $this->service->call(static::getName(), $method, $params);
        var_dump($result);
        return $result;
    }

    /**
     * @param array $params
     * @return ActionResult[]
     */
    protected function doAdd($params)
    {
        $response = $this->call('add', $params);
        $result = $this->mapArray($response->AddResults, ActionResult::class);
        var_dump($result);
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
        return $this->service->getMapper()->mapArray($data, [], $class);
    }
}