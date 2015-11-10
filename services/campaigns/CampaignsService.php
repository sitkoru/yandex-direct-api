<?php

namespace directapi\services\campaigns;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\campaigns\criterias\CampaignsSelectionCriteria;
use directapi\services\campaigns\enum\CampaignFieldEnum;
use directapi\services\campaigns\enum\MobileAppCampaignFieldEnum;
use directapi\services\campaigns\enum\TextCampaignFieldEnum;
use directapi\services\campaigns\models\CampaignAddItem;
use directapi\services\campaigns\models\CampaignGetItem;
use directapi\services\campaigns\models\CampaignUpdateItem;

class CampaignsService extends BaseService
{
    public static $name = 'Campaigns';

    /**
     * @param CampaignAddItem[] $Campaigns
     *
     * @return ActionResult[]
     */
    public function add(array $Campaigns)
    {
        $params = [
            'Campaigns' => $Campaigns
        ];
        $response = $this->call('add', $params);
        $result = $this->mapArray($response->AddResults, ActionResult::class);
        return $result;
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
     * @param CampaignsSelectionCriteria   $SelectionCriteria
     * @param CampaignFieldEnum[]          $FieldNames
     * @param TextCampaignFieldEnum[]      $TextCampaignFieldNames
     * @param MobileAppCampaignFieldEnum[] $MobileAppCampaignFieldNames
     * @param LimitOffset|null             $Page
     *
     * @return CampaignGetItem[]
     */
    public function get(
        CampaignsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $TextCampaignFieldNames = [],
        array $MobileAppCampaignFieldNames = [],
        LimitOffset $Page = null
    ) {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames,
        ];
        if ($TextCampaignFieldNames) {
            $params['TextCampaignFieldNames'] = $TextCampaignFieldNames;
        }
        if ($MobileAppCampaignFieldNames) {
            $params['MobileAppCampaignFieldNames'] = $MobileAppCampaignFieldNames;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }
        $response = $this->call('get', $params);
        $items = $this->mapArray($response->Campaigns, CampaignGetItem::class);
        return $items;
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
     * @param CampaignUpdateItem[] $Campaigns
     *
     * @return ActionResult[]
     */
    public function update($Campaigns)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'campaigns';
    }
}