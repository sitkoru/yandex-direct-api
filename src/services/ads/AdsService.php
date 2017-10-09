<?php

namespace directapi\services\ads;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\ads\criterias\AdsSelectionCriteria;
use directapi\services\ads\enum\AdFieldEnum;
use directapi\services\ads\enum\DynamicTextAdFieldEnum;
use directapi\services\ads\enum\MobileAppAdFieldEnum;
use directapi\services\ads\enum\TextAdFieldEnum;
use directapi\services\ads\models\AdAddItem;
use directapi\services\ads\models\AdGetItem;
use directapi\services\ads\models\AdUpdateItem;
use directapi\services\BaseService;

class AdsService extends BaseService
{
    /**
     * @param AdAddItem[] $Ads
     *
     * @return ActionResult[]
     */
    public function add(array $Ads)
    {
        $params = [
            'Ads' => $Ads
        ];
        return parent::doAdd($params);
    }

    /**
     * @inheritdoc
     */
    public function archive(IdsCriteria $SelectionCriteria)
    {
        return parent::archive($SelectionCriteria);
    }

    /**
     * @inheritdoc
     */
    public function delete($SelectionCriteria)
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param AdsSelectionCriteria     $SelectionCriteria
     *
     * @param AdFieldEnum[]            $FieldNames
     * @param TextAdFieldEnum[]        $TextAdFieldNames
     * @param MobileAppAdFieldEnum[]   $MobileAppAdFieldNames
     * @param DynamicTextAdFieldEnum[] $DynamicTextAdFieldNames
     * @param LimitOffset              $Page
     * @return models\AdGetItem[]
     */
    public function get(
        AdsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $TextAdFieldNames = [],
        array $MobileAppAdFieldNames = [],
        array $DynamicTextAdFieldNames = [],
        LimitOffset $Page = null
    ) {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($TextAdFieldNames) {
            $params['TextAdFieldNames'] = $TextAdFieldNames;
        }

        if ($MobileAppAdFieldNames) {
            $params['MobileAppAdFieldNames'] = $MobileAppAdFieldNames;
        }

        if ($DynamicTextAdFieldNames) {
            $params['DynamicTextAdFieldNames'] = $DynamicTextAdFieldNames;
        }

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'Ads', AdGetItem::class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function moderate(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('moderate', $params);
        return $this->mapArray($response->ModerateResults, ActionResult::class);
    }

    /**
     * @inheritdoc
     */
    public function resume(IdsCriteria $SelectionCriteria)
    {
        return parent::resume($SelectionCriteria);
    }

    /**
     * @inheritdoc
     */
    public function suspend(IdsCriteria $SelectionCriteria)
    {
        return parent::suspend($SelectionCriteria);
    }

    /**
     * @inheritdoc
     */
    public function unarchive(IdsCriteria $SelectionCriteria)
    {
        return parent::unarchive($SelectionCriteria);
    }

    /**
     * @param AdUpdateItem[] $Ads
     *
     * @return ActionResult[]
     */
    public function update(array $Ads)
    {
        $params = [
            'Ads' => $Ads
        ];
        return parent::doUpdate($params);
    }

    protected function getName()
    {
        return 'ads';
    }

    /**
     * @param AdGetItem[] $entities
     * @return AdUpdateItem[]
     */
    public function toUpdateEntities(array $entities)
    {
        return $this->convertClass($entities, AdUpdateItem::class);

    }
}