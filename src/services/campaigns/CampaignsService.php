<?php

namespace directapi\services\campaigns;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\campaigns\criterias\CampaignsSelectionCriteria;
use directapi\services\campaigns\enum\CampaignFieldEnum;
use directapi\services\campaigns\enum\CpmBannerCampaignFieldEnum;
use directapi\services\campaigns\enum\CpmCampaignSettingsEnum;
use directapi\services\campaigns\enum\DynamicCampaignFieldEnum;
use directapi\services\campaigns\enum\DynamicCampaignSettingsEnum;
use directapi\services\campaigns\enum\MobileAppCampaignFieldEnum;
use directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum;
use directapi\services\campaigns\enum\SmartCampaignFieldEnum;
use directapi\services\campaigns\enum\SmartCampaignSettingsEnum;
use directapi\services\campaigns\enum\TextCampaignFieldEnum;
use directapi\services\campaigns\enum\TextCampaignSettingsEnum;
use directapi\services\campaigns\models\CampaignAddItem;
use directapi\services\campaigns\models\CampaignGetItem;
use directapi\services\campaigns\models\CampaignUpdateItem;

class CampaignsService extends BaseService
{
    /**
     * @var string
     */
    public static $name = 'Campaigns';

    /**
     * @param CampaignAddItem[] $Campaigns
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $Campaigns): array
    {
        $params = [
            'Campaigns' => $Campaigns
        ];
        return parent::doAdd($params);
    }

    /**
     * @inheritdoc
     */
    public function archive(IdsCriteria $SelectionCriteria): array
    {
        return parent::archive($SelectionCriteria);
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
     * @param CampaignsSelectionCriteria   $SelectionCriteria
     * @param CampaignFieldEnum[]          $FieldNames
     * @param TextCampaignFieldEnum[]      $TextCampaignFieldNames
     * @param MobileAppCampaignFieldEnum[] $MobileAppCampaignFieldNames
     * @param DynamicCampaignFieldEnum[]   $DynamicTextCampaignFieldNames
     * @param CpmBannerCampaignFieldEnum[] $CpmBannerCampaignFieldNames
     * @param SmartCampaignFieldEnum[]     $SmartCampaignFieldNames
     * @param LimitOffset|null             $Page
     *
     * @return CampaignGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        CampaignsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $TextCampaignFieldNames = [],
        array $MobileAppCampaignFieldNames = [],
        array $DynamicTextCampaignFieldNames = [],
        array $CpmBannerCampaignFieldNames = [],
        array $SmartCampaignFieldNames = [],
        LimitOffset $Page = null
    ): array {
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
        if ($DynamicTextCampaignFieldNames) {
            $params['DynamicTextCampaignFieldNames'] = $DynamicTextCampaignFieldNames;
        }
        if ($CpmBannerCampaignFieldNames) {
            $params['CpmBannerCampaignFieldNames'] = $CpmBannerCampaignFieldNames;
        }
        if ($SmartCampaignFieldNames) {
            $params['SmartCampaignFieldNames'] = $SmartCampaignFieldNames;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }
        return parent::doGet($params, 'Campaigns', CampaignGetItem::class);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return array
     *
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
     * @param IdsCriteria $SelectionCriteria
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function suspend(IdsCriteria $SelectionCriteria): array
    {
        return parent::suspend($SelectionCriteria);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function unarchive(IdsCriteria $SelectionCriteria): array
    {
        return parent::unarchive($SelectionCriteria);
    }

    /**
     * @param CampaignUpdateItem[] $Campaigns
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function update($Campaigns): array
    {
        $params = [
            'Campaigns' => $Campaigns
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param CampaignGetItem[] $entities
     *
     * @return CampaignUpdateItem[]
     *
     * @throws \JsonMapper_Exception
     */
    public function toUpdateEntities(array $entities): array
    {
        /**
         * @var CampaignUpdateItem[] $converted
         */
        $converted = $this->convertClass($entities, CampaignUpdateItem::class);
        foreach ($converted as $campaign) {
            if ($campaign->TextCampaign && $campaign->TextCampaign->Settings) {
                foreach ($campaign->TextCampaign->Settings as $i => $setting) {
                    if (TextCampaignSettingsEnum::isGetOnly($setting->Option)) {
                        unset($campaign->TextCampaign->Settings[$i]);
                    }
                }
                $campaign->TextCampaign->Settings = array_values($campaign->TextCampaign->Settings);
            }
            if ($campaign->CpmBannerCampaign && $campaign->CpmBannerCampaign->Settings) {
                foreach ($campaign->CpmBannerCampaign->Settings as $i => $setting) {
                    if (CpmCampaignSettingsEnum::isGetOnly($setting->Option)) {
                        unset($campaign->CpmBannerCampaign->Settings[$i]);
                    }
                }
                $campaign->CpmBannerCampaign->Settings = array_values($campaign->CpmBannerCampaign->Settings);
            }
            if ($campaign->DynamicTextCampaign && $campaign->DynamicTextCampaign->Settings) {
                foreach ($campaign->DynamicTextCampaign->Settings as $i => $setting) {
                    if (DynamicCampaignSettingsEnum::isGetOnly($setting->Option)) {
                        unset($campaign->DynamicTextCampaign->Settings[$i]);
                    }
                }
                $campaign->DynamicTextCampaign->Settings = array_values($campaign->DynamicTextCampaign->Settings);
            }
            if ($campaign->SmartCampaign && $campaign->SmartCampaign->Settings) {
                foreach ($campaign->SmartCampaign->Settings as $i => $setting) {
                    if (SmartCampaignSettingsEnum::isGetOnly($setting->Option)) {
                        unset($campaign->SmartCampaign->Settings[$i]);
                    }
                }
                $campaign->SmartCampaign->Settings = array_values($campaign->SmartCampaign->Settings);
            }
            if ($campaign->MobileAppCampaign && $campaign->MobileAppCampaign->Settings) {
                foreach ($campaign->MobileAppCampaign->Settings as $i => $setting) {
                    if (MobileAppCampaignSettingsEnum::isGetOnly($setting->Option)) {
                        unset($campaign->MobileAppCampaign->Settings[$i]);
                    }
                }
                $campaign->MobileAppCampaign->Settings = array_values($campaign->MobileAppCampaign->Settings);
            }
        }
        return $converted;
    }

    protected function getName(): string
    {
        return 'campaigns';
    }
}
