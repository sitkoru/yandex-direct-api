<?php

namespace directapi\services\retargetinglists;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\retargetinglists\criterias\RetargetingListSelectionCriteria;
use directapi\services\retargetinglists\enum\RetargetingListFieldEnum;
use directapi\services\retargetinglists\models\RetargetingListAddItem;
use directapi\services\retargetinglists\models\RetargetingListGetItem;
use directapi\services\retargetinglists\models\RetargetingListUpdateItem;

class RetargetingListsService extends BaseService
{
    /**
     * @param array $entities
     *
     * @return array
     *
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('This function not implemented');
    }

    /**
     * @param RetargetingListAddItem[] $RetargetingLists
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $RetargetingLists): array
    {
        $params = [
            'RetargetingLists' => $RetargetingLists
        ];
        return parent::doAdd($params);
    }

    /**
     * @param $SelectionCriteria
     *
     * @return array|ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function delete(IdsCriteria $SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param RetargetingListUpdateItem[] $RetargetingLists
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function update(array $RetargetingLists): array
    {
        $params = [
            'RetargetingLists' => $RetargetingLists
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param RetargetingListSelectionCriteria $SelectionCriteria
     * @param RetargetingListFieldEnum[]       $FieldNames
     * @param LimitOffset                      $Page
     *
     * @return RetargetingListGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        RetargetingListSelectionCriteria $SelectionCriteria,
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

        return parent::doGet($params, 'RetargetingLists', RetargetingListGetItem::class);
    }

    protected function getName(): string
    {
        return 'retargetinglists';
    }
}
