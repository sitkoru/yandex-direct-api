<?php

namespace directapi\services\agencyclients;


use directapi\common\criterias\LimitOffset;
use directapi\common\enum\clients\ClientFieldEnum;
use directapi\common\models\clients\ClientGetItem;
use directapi\services\agencyclients\criterias\AgencyClientsSelectionCriteria;
use directapi\services\BaseService;

class AgencyClientsService extends BaseService
{
    /**
     * @param AgencyClientsSelectionCriteria $SelectionCriteria
     * @param ClientFieldEnum[]              $FieldNames
     * @param LimitOffset|null               $Page
     * @return ClientGetItem[]
     */
    public function get(AgencyClientsSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'Clients', ClientGetItem::class);
    }

    protected function getName()
    {
        return 'agencyclients';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}