<?php

namespace directapi\services\bidmodifiers;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\common\results\MultiIdsActionResult;
use directapi\services\BaseService;
use directapi\services\bidmodifiers\criterias\BidModifiersSelectionCriteria;
use directapi\services\bidmodifiers\enum\BidModifierFieldEnum;
use directapi\services\bidmodifiers\enum\DemographicsAdjustmentFieldEnum;
use directapi\services\bidmodifiers\enum\MobileAdjustmentFieldEnum;
use directapi\services\bidmodifiers\enum\RegionalAdjustmentFieldEnum;
use directapi\services\bidmodifiers\enum\RetargetingAdjustmentFieldEnum;
use directapi\services\bidmodifiers\enum\SmartAdjustmentFieldEnum;
use directapi\services\bidmodifiers\enum\VideoAdjustmentFieldEnum;
use directapi\services\bidmodifiers\models\BidModifierAddItem;
use directapi\services\bidmodifiers\models\BidModifierGetItem;
use directapi\services\bidmodifiers\models\BidModifierSetItem;
use directapi\services\bidmodifiers\models\BidModifierToggleItem;
use directapi\services\bidmodifiers\results\ToggleResult;

class BidModifiersService extends BaseService
{
    /**
     * @param BidModifierAddItem[] $BidModifiers
     *
     * @return MultiIdsActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $BidModifiers): array
    {
        $params = [
            'BidModifiers' => $BidModifiers
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
     * @param BidModifiersSelectionCriteria     $SelectionCriteria
     * @param BidModifierFieldEnum              $FieldNames
     * @param MobileAdjustmentFieldEnum[]       $MobileAdjustmentFieldNames
     * @param DemographicsAdjustmentFieldEnum[] $DemographicsAdjustmentFieldNames
     * @param RetargetingAdjustmentFieldEnum[]  $RetargetingAdjustmentFieldNames
     * @param RegionalAdjustmentFieldEnum[]     $RegionalAdjustmentFieldNames
     * @param VideoAdjustmentFieldEnum[]        $VideoAdjustmentFieldNames
     * @param SmartAdjustmentFieldEnum[]        $SmartAdAdjustmentFieldNames
     * @param LimitOffset|null                  $Page
     *
     * @return BidModifierGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        BidModifiersSelectionCriteria $SelectionCriteria,
        $FieldNames,
        array $MobileAdjustmentFieldNames = [],
        array $DemographicsAdjustmentFieldNames = [],
        array $RetargetingAdjustmentFieldNames = [],
        array $RegionalAdjustmentFieldNames = [],
        array $VideoAdjustmentFieldNames = [],
        array $SmartAdAdjustmentFieldNames = [],
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames,
        ];
        if ($MobileAdjustmentFieldNames) {
            $params['MobileAdjustmentFieldNames'] = $MobileAdjustmentFieldNames;
        }
        if ($DemographicsAdjustmentFieldNames) {
            $params['DemographicsAdjustmentFieldNames'] = $DemographicsAdjustmentFieldNames;
        }
        if ($RetargetingAdjustmentFieldNames) {
            $params['RetargetingAdjustmentFieldNames'] = $RetargetingAdjustmentFieldNames;
        }
        if ($RegionalAdjustmentFieldNames) {
            $params['RegionalAdjustmentFieldNames'] = $RegionalAdjustmentFieldNames;
        }
        if ($VideoAdjustmentFieldNames) {
            $params['VideoAdjustmentFieldNames'] = $VideoAdjustmentFieldNames;
        }
        if ($SmartAdAdjustmentFieldNames) {
            $params['SmartAdAdjustmentFieldNames'] = $SmartAdAdjustmentFieldNames;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }
        return parent::doGet($params, 'BidModifiers', BidModifierGetItem::class);
    }

    /**
     * @param BidModifierSetItem[] $BidModifiers
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function set(array $BidModifiers): array
    {
        $params = [
            'BidModifiers' => $BidModifiers
        ];
        $result = $this->call('set', $params);
        return $this->mapArray($result->SetResults, ActionResult::class);
    }

    /**
     * @param BidModifierToggleItem[] $BidModifierToggleItems
     *
     * @return ToggleResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function toggle(array $BidModifierToggleItems): array
    {
        $params = [
            'BidModifierToggleItems' => $BidModifierToggleItems
        ];
        $result = $this->call('toggle', $params);
        return $this->mapArray($result->SetResults, ToggleResult::class);
    }

    /**
     * @param array $entities
     *
     * @return array
     *
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    protected function getName(): string
    {
        return 'bidmodifiers';
    }
}
