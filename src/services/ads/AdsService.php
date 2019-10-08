<?php

namespace directapi\services\ads;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\ads\criterias\AdsSelectionCriteria;
use directapi\services\ads\enum\AdFieldEnum;
use directapi\services\ads\enum\CpcVideoAdBuilderAdFieldEnum;
use directapi\services\ads\enum\CpmBannerAdBuilderAdFieldEnum;
use directapi\services\ads\enum\CpmVideoAdBuilderAdFieldEnum;
use directapi\services\ads\enum\DynamicTextAdFieldEnum;
use directapi\services\ads\enum\MobileAppAdBuilderAdFieldEnum;
use directapi\services\ads\enum\MobileAppAdFieldEnum;
use directapi\services\ads\enum\MobileAppImageAdFieldEnum;
use directapi\services\ads\enum\TextAdBuilderAdFieldEnum;
use directapi\services\ads\enum\TextAdFieldEnum;
use directapi\services\ads\enum\TextAdPriceExtensionFieldEnum;
use directapi\services\ads\enum\TextImageAdFieldEnum;
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $Ads): array
    {
        $params = [
            'Ads' => $Ads
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
     * @param AdsSelectionCriteria            $SelectionCriteria
     *
     * @param AdFieldEnum[]                   $FieldNames
     * @param TextAdFieldEnum[]               $TextAdFieldNames
     * @param TextAdPriceExtensionFieldEnum[] $TextAdPriceExtensionFieldNames
     * @param MobileAppAdFieldEnum[]          $MobileAppAdFieldNames
     * @param DynamicTextAdFieldEnum[]        $DynamicTextAdFieldNames
     * @param TextImageAdFieldEnum[]          $TextImageAdFieldNames
     * @param MobileAppImageAdFieldEnum[]     $MobileAppImageAdFieldNames
     * @param TextAdBuilderAdFieldEnum[]      $TextAdBuilderAdFieldNames
     * @param MobileAppAdBuilderAdFieldEnum[] $MobileAppAdBuilderAdFieldNames
     * @param CpcVideoAdBuilderAdFieldEnum[]  $CpcVideoAdBuilderAdFieldNames
     * @param CpmBannerAdBuilderAdFieldEnum[] $CpmBannerAdBuilderAdFieldNames
     * @param CpmVideoAdBuilderAdFieldEnum[]  $CpmVideoAdBuilderAdFieldNames
     * @param LimitOffset                     $Page
     * @return models\AdGetItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        AdsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $TextAdFieldNames = [],
        array $TextAdPriceExtensionFieldNames = [],
        array $MobileAppAdFieldNames = [],
        array $DynamicTextAdFieldNames = [],
        array $TextImageAdFieldNames = [],
        array $MobileAppImageAdFieldNames = [],
        array $TextAdBuilderAdFieldNames = [],
        array $MobileAppAdBuilderAdFieldNames = [],
        array $CpcVideoAdBuilderAdFieldNames = [],
        array $CpmBannerAdBuilderAdFieldNames = [],
        array $CpmVideoAdBuilderAdFieldNames = [],
        LimitOffset $Page = null
    ): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($TextAdFieldNames) {
            $params['TextAdFieldNames'] = $TextAdFieldNames;
        }

        if ($TextAdPriceExtensionFieldNames) {
            $params['TextAdPriceExtensionFieldNames'] = $TextAdPriceExtensionFieldNames;
        }

        if ($MobileAppAdFieldNames) {
            $params['MobileAppAdFieldNames'] = $MobileAppAdFieldNames;
        }

        if ($DynamicTextAdFieldNames) {
            $params['DynamicTextAdFieldNames'] = $DynamicTextAdFieldNames;
        }

        if ($TextImageAdFieldNames) {
            $params['TextImageAdFieldNames'] = $TextImageAdFieldNames;
        }

        if ($MobileAppImageAdFieldNames) {
            $params['MobileAppImageAdFieldNames'] = $MobileAppImageAdFieldNames;
        }

        if ($TextAdBuilderAdFieldNames) {
            $params['TextAdBuilderAdFieldNames'] = $TextAdBuilderAdFieldNames;
        }

        if ($MobileAppAdBuilderAdFieldNames) {
            $params['MobileAppAdBuilderAdFieldNames'] = $MobileAppAdBuilderAdFieldNames;
        }

        if ($CpcVideoAdBuilderAdFieldNames) {
            $params['CpcVideoAdBuilderAdFieldNames'] = $CpcVideoAdBuilderAdFieldNames;
        }

        if ($CpmBannerAdBuilderAdFieldNames) {
            $params['CpmBannerAdBuilderAdFieldNames'] = $CpmBannerAdBuilderAdFieldNames;
        }

        if ($CpmVideoAdBuilderAdFieldNames) {
            $params['CpmVideoAdBuilderAdFieldNames'] = $CpmVideoAdBuilderAdFieldNames;
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function moderate(IdsCriteria $SelectionCriteria): array
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
     * @inheritdoc
     */
    public function unarchive(IdsCriteria $SelectionCriteria): array
    {
        return parent::unarchive($SelectionCriteria);
    }

    /**
     * @param AdUpdateItem[] $Ads
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function update(array $Ads): array
    {
        $params = [
            'Ads' => $Ads
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param AdGetItem[] $entities
     * @return AdUpdateItem[]
     * @throws \JsonMapper_Exception
     */
    public function toUpdateEntities(array $entities): array
    {
        return $this->convertClass($entities, AdUpdateItem::class);

    }

    protected function getName(): string
    {
        return 'ads';
    }
}
