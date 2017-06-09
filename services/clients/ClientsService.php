<?php

namespace directapi\services\clients;


use directapi\services\BaseService;
use directapi\services\clients\enum\ClientFieldEnum;
use directapi\services\clients\models\ClientGetItem;

class ClientsService extends BaseService
{
    /**
     * @param ClientFieldEnum[] $FieldNames
     * @return ClientGetItem[]
     */
    public function get(array $FieldNames)
    {
        $params = [
            'FieldNames' => $FieldNames
        ];

        return parent::doGet($params, 'Clients', ClientGetItem::class);
    }

    protected function getName()
    {
        return 'clients';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}