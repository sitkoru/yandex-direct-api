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
     */
    public function add(array $SitelinksSets)
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
     * @param IdsCriteria             $SelectionCriteria
     * @param SitelinksSetFieldEnum[] $FieldNames
     * @param LimitOffset             $Page
     *
     * @return SitelinksSetGetItem[]
     */
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'sitelinks';
    }
}