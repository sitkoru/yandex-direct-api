<?php

namespace directapi\services\vcards;


use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\vcards\enum\VCardFieldEnum;
use directapi\services\vcards\models\VCardAddItem;
use directapi\services\vcards\models\VCardGetItem;

class VCardsService extends BaseService
{
    /**
     * @param VCardAddItem[] $VCards
     *
     * @return ActionResult[]
     */
    public function add(array $VCards)
    {
        throw new \Exception('Not implemented');
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function delete(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('delete', $params);
        $result = $this->mapArray($response->DeleteResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria      $SelectionCriteria
     * @param VCardFieldEnum[] $FieldNames
     * @param LimitOffset      $Page
     *
     * @return VCardGetItem[]
     */
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'vcards';
    }
}