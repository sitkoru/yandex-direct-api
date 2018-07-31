<?php

namespace directapi\services\agencyclients;


use directapi\common\criterias\LimitOffset;
use directapi\common\enum\clients\ClientFieldEnum;
use directapi\common\models\clients\ClientGetItem;
use directapi\DirectApiService;
use directapi\services\agencyclients\criterias\AgencyClientsSelectionCriteria;
use directapi\services\BaseService;

class AgencyClientsService extends BaseService
{
    public function __construct(DirectApiService $service)
    {
        parent::__construct($service);
        $this->sendClientLogin = false;
    }

    /**
     * @param AgencyClientsSelectionCriteria $SelectionCriteria
     * @param ClientFieldEnum[]              $FieldNames
     * @param LimitOffset|null               $Page
     * @return ClientGetItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        AgencyClientsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'Clients', ClientGetItem::class);
    }

    /**
     * @param array $entities
     * @return array
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    protected function getName(): string
    {
        return 'agencyclients';
    }
}