<?php

namespace directapi\services\ads;

use directapi\common\criterias\IdsCriteria;
use directapi\common\results\ActionResult;
use directapi\services\ads\criterias\AdsSelectionCriteria;
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
        return parent::add($params);
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
    public function delete(IdsCriteria $SelectionCriteria)
    {
        return parent::delete($SelectionCriteria);
    }

    /**
     * @param AdsSelectionCriteria $SelectionCriteria
     *
     * @return AdGetItem[]
     */
    public function get(AdsSelectionCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
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
        $result = $this->mapArray($response->ModerateResults, ActionResult::class);
        return $result;
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
        return parent::update($params);
    }

    protected function getName()
    {
        return 'ads';
    }
}