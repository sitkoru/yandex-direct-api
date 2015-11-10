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
     * return ActionResult[]
     */
    public function add(array $AdGroups)
    {
        throw new \Exception('Not implemented');
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
        throw new \Exception('Not implemented');
    }

    /**
     * @param AdGroupUpdateItem[] $AdGroups
     * @throws \Exception
     *
     * @return ActionResult[]
     */
    public function update(array $AdGroups)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'adgroups';
    }
}