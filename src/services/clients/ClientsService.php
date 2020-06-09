<?php

namespace directapi\services\clients;

use directapi\common\enum\clients\ClientFieldEnum;
use directapi\common\models\clients\ClientGetItem;
use directapi\services\BaseService;

class ClientsService extends BaseService
{
    /**
     * @param ClientFieldEnum[] $FieldNames
     *
     * @return ClientGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(array $FieldNames): array
    {
        $params = [
            'FieldNames' => $FieldNames
        ];

        return parent::doGet($params, 'Clients', ClientGetItem::class);
    }

    /**
     * @param array $entities
     *
     * @return array
     *
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    protected function getName(): string
    {
        return 'clients';
    }
}
