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
        $response = $this->call('add', $params);
        $result = $this->mapArray($response->AddResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     * @throws \Exception
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
        $response = $this->call('get', $params);
        $items = $this->mapArray($response->Campaigns, AdGroupGetItem::class);
        return $items;
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
        $response = $this->call('update', $params);
        $result = $this->mapArray($response->UpdateResults, ActionResult::class);
        return $result;
    }

    protected function getName()
    {
        return 'adgroups';
    }
}