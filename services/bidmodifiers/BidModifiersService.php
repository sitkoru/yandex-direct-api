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
use directapi\services\bidmodifiers\enum\RetargetingAdjustmentFieldEnum;
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
     */
    public function add(array $BidModifiers)
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
     * @param BidModifiersSelectionCriteria     $SelectionCriteria
     * @param BidModifierFieldEnum              $FieldNames
     * @param MobileAdjustmentFieldEnum[]       $MobileAdjustmentFieldNames
     * @param DemographicsAdjustmentFieldEnum[] $DemographicsAdjustmentFieldNames
     * @param RetargetingAdjustmentFieldEnum[]  $RetargetingAdjustmentFieldNames
     * @param LimitOffset|null                  $Page
     *
     * @return BidModifierGetItem[]
     */
    public function get(
        BidModifiersSelectionCriteria $SelectionCriteria,
        $FieldNames,
        array $MobileAdjustmentFieldNames = [],
        array $DemographicsAdjustmentFieldNames = [],
        array $RetargetingAdjustmentFieldNames = [],
        LimitOffset $Page = null
    ) {
        throw new \Exception('Not implemented');
    }

    /**
     * @param BidModifierSetItem[] $BidModifiers
     *
     * @return ActionResult[]
     */
    public function set(array $BidModifiers)
    {
        throw new \Exception('Not implemented');
    }

    /**
     * @param BidModifierToggleItem[] $BidModifierToggleItems
     *
     * @return ToggleResult[]
     */
    public function toggle(array $BidModifierToggleItems)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'bidmodifiers';
    }
}