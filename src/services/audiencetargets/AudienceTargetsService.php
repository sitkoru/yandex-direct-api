<?php


namespace directapi\services\audiencetargets;

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
     * @return array
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param AudienceTargetAddItem[] $AudienceTargets
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $AudienceTargets): array
    {
        $params = [
            'AudienceTargets' => $AudienceTargets
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
     * @param IdsCriteria $SelectionCriteria
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function resume(IdsCriteria $SelectionCriteria): array
    {
        return parent::resume($SelectionCriteria);
    }

    /**
     * @inheritdoc
     */
    public function suspend(IdsCriteria $SelectionCriteria): array
    {
        return parent::suspend($SelectionCriteria);
    }

    /**
     * @param AudienceTargetSelectionCriteria $SelectionCriteria
     *
     * @param AudienceTargetFieldEnum[]       $FieldNames
     * @param LimitOffset                     $Page
     * @return AudienceTargetGetItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        AudienceTargetSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        LimitOffset $Page = null
    ): array {
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function setBids(array $Bids): array
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('setBids', $params);
        return $this->mapArray($result->SetBidsResults, ActionResult::class);
    }

    protected function getName(): string
    {
        return 'audiencetargets';
    }
}