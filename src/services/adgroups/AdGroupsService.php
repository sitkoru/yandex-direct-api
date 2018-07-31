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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return ActionResult[]
     */
    public function add(array $AdGroups): array
    {
        $params = [
            'AdGroups' => $AdGroups
        ];
        return parent::doAdd($params);
    }

    /**
     * @param $SelectionCriteria
     * @return array|ActionResult[]
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
     * @param AdGroupsSelectionCriteria   $SelectionCriteria
     * @param AdGroupFieldEnum[]          $FieldNames
     * @param MobileAppAdGroupFieldEnum[] $MobileAppAdGroupFieldNames
     * @param LimitOffset                 $Page
     *
     * @return AdGroupGetItem[]
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(
        AdGroupsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $MobileAppAdGroupFieldNames = [],
        LimitOffset $Page = null
    ): array {
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return ActionResult[]
     */
    public function update(array $AdGroups): array
    {
        $params = [
            'AdGroups' => $AdGroups
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param AdGroupGetItem[] $entities
     * @return AdGroupUpdateItem[]
     * @throws \JsonMapper_Exception
     */
    public function toUpdateEntities(array $entities): array
    {
        return $this->convertClass($entities, AdGroupUpdateItem::class);

    }

    protected function getName(): string
    {
        return 'adgroups';
    }
}