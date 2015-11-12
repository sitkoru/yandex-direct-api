<?php

namespace directapi\services\adgroups;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\adgroups\criterias\AdGroupsSelectionCriteria;
use directapi\services\adgroups\enum\AdGroupFieldEnum;
use directapi\services\adgroups\enum\MobileAppAdGroupFieldEnum;
use directapi\services\adgroups\models\AdGroupAddItem;
use directapi\services\adgroups\models\AdGroupGetItem;
use directapi\services\adgroups\models\AdGroupUpdateItem;
use directapi\services\BaseService;

class AdGroupsService extends BaseService
{
    /**
     * @param AdGroupAddItem[] $AdGroups
     * @throws \Exception
     *
     * @return ActionResult[]
     */
    public function add(array $AdGroups)
    {
        $params = [
            'AdGroups' => $AdGroups
        ];
        return parent::add($params);
    }

    /**
     * @inheritdoc
     */
    public function delete(IdsCriteria $SelectionCriteria)
    {
        return parent::delete($SelectionCriteria);
    }

    /**
     * @param AdGroupsSelectionCriteria   $SelectionCriteria
     * @param AdGroupFieldEnum[]          $FieldNames
     * @param MobileAppAdGroupFieldEnum[] $MobileAppAdGroupFieldNames
     * @param LimitOffset                 $Page
     *
     * @return AdGroupGetItem[]
     * @throws \Exception
     */
    public function get(
        AdGroupsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $MobileAppAdGroupFieldNames = [],
        LimitOffset $Page = null
    ) {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames,
        ];
        if ($MobileAppAdGroupFieldNames) {
            $params['MobileAppAdGroupFieldNames'] = $MobileAppAdGroupFieldNames;
        }

        if ($Page) {
            $params['Page'] = $Page;
        }
        return parent::doGet($params, 'AdGroups', AdGroupGetItem::class);
    }

    /**
     * @param AdGroupUpdateItem[] $AdGroups
     * @throws \Exception
     *
     * @return ActionResult[]
     */
    public function update(array $AdGroups)
    {
        $params = [
            'AdGroups' => $AdGroups
        ];
        return parent::update($params);
    }

    protected function getName()
    {
        return 'adgroups';
    }
}