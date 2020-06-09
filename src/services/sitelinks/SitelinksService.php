<?php

namespace directapi\services\sitelinks;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\sitelinks\enum\SitelinksSetFieldEnum;
use directapi\services\sitelinks\models\SitelinksSetAddItem;
use directapi\services\sitelinks\models\SitelinksSetGetItem;

class SitelinksService extends BaseService
{
    /**
     * @param SitelinksSetAddItem[] $SitelinksSets
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $SitelinksSets): array
    {
        $params = [
            'SitelinksSets' => $SitelinksSets
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
     * @param IdsCriteria             $SelectionCriteria
     * @param SitelinksSetFieldEnum[] $FieldNames
     * @param LimitOffset             $Page
     *
     * @return SitelinksSetGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'SitelinksSets', SitelinksSetGetItem::class);
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
        return 'sitelinks';
    }
}
