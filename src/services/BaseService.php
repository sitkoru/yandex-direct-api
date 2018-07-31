<?php

namespace directapi\services;

use directapi\common\criterias\IdsCriteria;
use directapi\common\results\ActionResult;
use directapi\components\interfaces\ICriteria;
use directapi\DirectApiService;

abstract class BaseService
{
    /**
     * @var array
     */
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
    /**
     * @var array
     */
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
     * @var bool
     */
    protected $sendClientLogin = true;
    /**
     * @var \directapi\DirectApiService
     */
    protected $service;

    public function __construct(DirectApiService $service)
    {
        $this->service = $service;
    }

    /**
     * @param $method
     * @param $objectsCount
     * @return float|int
     */
    public function count(string $method, int $objectsCount)
    {
        $cost = 0;
        $name = static::getName();
        if ($objectsCount > 0 && array_key_exists($name, self::$unitsCostTable)) {
            $servicesCost = self::$unitsCostTable[$name];
            if (array_key_exists($method, $servicesCost)) {
                [$callCost, $objectCost] = $servicesCost[$method];
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

    abstract protected function getName(): string;

    abstract public function toUpdateEntities(array $entities): array;

    /**
     * @param array  $params
     * @param string $class
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function doAdd(array $params, string $class = ActionResult::class): array
    {
        $response = $this->call('add', $params);
        return $this->mapArray($response->AddResults, $class);
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function call(string $method, array $params)
    {
        return $this->service->call(static::getName(), $method, $params, $this->sendClientLogin);
    }

    /**
     * @param $data
     * @param $class
     * @return array
     */
    protected function mapArray(array $data, string $class): array
    {
        return $this->service->getMapper()->mapArray($data, [], $class);
    }

    /**
     * @param array  $params
     * @param string $paramName
     * @param string $class
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function doGet(array $params, string $paramName, string $class): array
    {
        $result = [[]];
        while ($response = $this->call('get', $params)) {
            if (property_exists($response, $paramName) && $response->$paramName !== null) {
                $result[] = $this->mapArray($response->$paramName, $class);
            }
            if (property_exists($response, 'limitedBy')) {
                $params['Offset'] = $response->limitedBy;
            } else {
                break;
            }
        }
        return array_merge(...$result);
    }

    /**
     * @param array $params
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function doUpdate($params): array
    {
        $response = $this->call('update', $params);
        return $this->mapArray($response->UpdateResults, ActionResult::class);
    }

    /**
     * @param ICriteria $SelectionCriteria
     * @param string    $class
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function doDelete($SelectionCriteria, $class = ActionResult::class): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('delete', $params);
        return $this->mapArray($response->DeleteResults, $class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function suspend(IdsCriteria $SelectionCriteria): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('suspend', $params);
        return $this->mapArray($response->SuspendResults, ActionResult::class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function resume(IdsCriteria $SelectionCriteria): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('resume', $params);
        return $this->mapArray($response->ResumeResults, ActionResult::class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function archive(IdsCriteria $SelectionCriteria): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('archive', $params);
        return $this->mapArray($response->ArchiveResults, ActionResult::class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    protected function unarchive(IdsCriteria $SelectionCriteria): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('unarchive', $params);
        return $this->mapArray($response->UnarchiveResults, ActionResult::class);
    }

    /**
     * @param object $data
     * @param        $class
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    protected function map($data, string $class)
    {
        return $this->service->getMapper()->map($data, new $class());
    }

    /**
     * @param array  $entities
     * @param string $class
     * @return array
     * @throws \JsonMapper_Exception
     */
    protected function convertClass(array $entities, string $class): array
    {
        $converted = [];
        foreach ($entities as $entity) {
            $converted[] = $this->service->getMapper()->map(json_decode(json_encode($entity)), new $class);
        }
        return $converted;
    }
}