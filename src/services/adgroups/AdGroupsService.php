<?php

namespace directapi\services\adgroups;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\RequestValidationException;
use directapi\services\adgroups\criterias\AdGroupsSelectionCriteria;
use directapi\services\adgroups\enum\AdGroupFieldEnum;
use directapi\services\adgroups\enum\DynamicTextAdGroupFieldEnum;
use directapi\services\adgroups\enum\DynamicTextFeedAdGroupFieldEnum;
use directapi\services\adgroups\enum\MobileAppAdGroupFieldEnum;
use directapi\services\adgroups\enum\SmartAdGroupFieldEnum;
use directapi\services\adgroups\models\AdGroupAddItem;
use directapi\services\adgroups\models\AdGroupGetItem;
use directapi\services\adgroups\models\AdGroupUpdateItem;
use directapi\services\BaseService;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper_Exception;

class AdGroupsService extends BaseService
{
    /**
     * @param AdGroupAddItem[] $AdGroups
     *
     * @return ActionResult[]
     *
     * @throws GuzzleException
     * @throws Exception
     */
    public function add(array $AdGroups): array
    {
        $params = [
            'AdGroups' => $AdGroups
        ];
        return parent::doAdd($params);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return array|ActionResult[]
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws GuzzleException
     * @throws JsonMapper_Exception
     * @throws RequestValidationException
     */
    public function delete(IdsCriteria $SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param AdGroupsSelectionCriteria         $SelectionCriteria
     * @param AdGroupFieldEnum[]                $FieldNames
     * @param MobileAppAdGroupFieldEnum[]       $MobileAppAdGroupFieldNames
     * @param DynamicTextAdGroupFieldEnum[]     $DynamicTextAdGroupFieldNames
     * @param DynamicTextFeedAdGroupFieldEnum[] $DynamicTextFeedAdGroupFieldNames
     * @param SmartAdGroupFieldEnum[]           $SmartAdGroupFieldNames
     * @param LimitOffset                       $Page
     *
     * @return AdGroupGetItem[]
     *
     * @throws Exception
     * @throws GuzzleException
     */
    public function get(
        AdGroupsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $MobileAppAdGroupFieldNames = [],
        array $DynamicTextAdGroupFieldNames = [],
        array $DynamicTextFeedAdGroupFieldNames = [],
        array $SmartAdGroupFieldNames = [],
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames,
        ];
        if ($MobileAppAdGroupFieldNames) {
            $params['MobileAppAdGroupFieldNames'] = $MobileAppAdGroupFieldNames;
        }
        if ($DynamicTextAdGroupFieldNames) {
            $params['DynamicTextAdGroupFieldNames'] = $DynamicTextAdGroupFieldNames;
        }
        if ($DynamicTextFeedAdGroupFieldNames) {
            $params['DynamicTextFeedAdGroupFieldNames'] = $DynamicTextFeedAdGroupFieldNames;
        }
        if ($SmartAdGroupFieldNames) {
            $params['SmartAdGroupFieldNames'] = $SmartAdGroupFieldNames;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }
        return parent::doGet($params, 'AdGroups', AdGroupGetItem::class);
    }

    /**
     * @param AdGroupUpdateItem[] $AdGroups
     *
     * @return ActionResult[]
     *
     * @throws GuzzleException
     * @throws Exception
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
     *
     * @return AdGroupUpdateItem[]
     *
     * @throws JsonMapper_Exception
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
