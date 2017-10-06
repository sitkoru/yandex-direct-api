<?php

namespace directapi\services\clients;


use directapi\common\enum\clients\ClientFieldEnum;
use directapi\common\models\clients\ClientGetItem;
use directapi\services\BaseService;

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