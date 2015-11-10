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
        throw new \Exception('Not implemented');
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function archive(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('archive', $params);
        $result = $this->mapArray($response->ArchiveResults, ActionResult::class);
        return $result;
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
     * @param AdsSelectionCriteria $SelectionCriteria
     *
     * @return AdGetItem[]
     */
    public function get(AdsSelectionCriteria $SelectionCriteria)
    {
        throw new \Exception('Not implemented');
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
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function resume(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('resume', $params);
        $result = $this->mapArray($response->ResumeResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function suspend(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('suspend', $params);
        $result = $this->mapArray($response->SuspendResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function unarchive(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('unarchive', $params);
        $result = $this->mapArray($response->UnarchiveResults, ActionResult::class);
        return $result;
    }

    /**
     * @param AdUpdateItem[] $Ads
     *
     * @return ActionResult[]
     */
    public function update(array $Ads)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'ads';
    }
}