<?php


namespace directapi\services\audiencetargets;


use common\exceptions\NotImplementedException;
use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\audiencetargets\criterias\AudienceTargetSelectionCriteria;
use directapi\services\audiencetargets\enum\AudienceTargetFieldEnum;
use directapi\services\audiencetargets\models\AudienceTargetAddItem;
use directapi\services\audiencetargets\models\AudienceTargetGetItem;
use directapi\services\audiencetargets\models\AudienceTargetSetBidsItem;
use directapi\services\BaseService;

class AudienceTargetsService extends BaseService
{

    /**
     * @param array $entities
     * @throws NotImplementedException
     */
    public function toUpdateEntities(array $entities)
    {
        throw new NotImplementedException();
    }

    /**
     * @param AudienceTargetAddItem[] $AudienceTargets
     * @return ActionResult[]
     */
    public function add(array $AudienceTargets)
    {
        $params = [
            'AudienceTargets' => $AudienceTargets
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
     * @param AudienceTargetSelectionCriteria $SelectionCriteria
     *
     * @param AudienceTargetFieldEnum[]       $FieldNames
     * @param LimitOffset                     $Page
     * @return AudienceTargetGetItem[]
     */
    public function get(
        AudienceTargetSelectionCriteria $SelectionCriteria,
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

        return parent::doGet($params, 'AudienceTargets', AudienceTargetGetItem::class);
    }

    /**
     * @param AudienceTargetSetBidsItem[] $Bids
     * @return ActionResult[]
     */
    public function setBids(array $Bids)
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('setBids', $params);
        return $this->mapArray($result->SetBidsResults, ActionResult::class);
    }

    protected function getName()
    {
        return 'audiencetargets';
    }
}