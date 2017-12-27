<?php

namespace directapi\services\retargetinglists;

use common\exceptions\NotImplementedException;
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
     * @throws NotImplementedException
     */
    public function toUpdateEntities(array $entities)
    {
        throw new NotImplementedException('This function not implemented');
    }

    /**
     * @param RetargetingListAddItem[] $RetargetingLists
     * @return ActionResult[]
     */
    public function add(array $RetargetingLists)
    {
        $params = [
            'RetargetingLists' => $RetargetingLists
        ];
        return parent::doAdd($params);
    }

    /**
     * @inheritdoc
     */
    public function delete($SelectionCriteria)
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param RetargetingListUpdateItem[] $RetargetingLists
     *
     * @return ActionResult[]
     */
    public function update(array $RetargetingLists)
    {
        $params = [
            'RetargetingLists' => $RetargetingLists
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param RetargetingListSelectionCriteria $SelectionCriteria
     *
     * @param RetargetingListFieldEnum[]        $FieldNames
     * @param LimitOffset                   $Page
     * @return RetargetingListGetItem[]
     */
    public function get(
        RetargetingListSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        LimitOffset $Page = null
    ) {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'RetargetingLists', RetargetingListGetItem::class);
    }

    protected function getName()
    {
        return 'retargetinglists';
    }
}