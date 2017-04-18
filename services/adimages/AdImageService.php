<?php

use directapi\common\results\ActionResult;
use directapi\services\BaseService;

class AdImageService extends BaseService
{
    protected function getName()
    {
        return 'adimages';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param AdImageAddItem[] $AdImages
     * @throws \Exception
     *
     * @return ActionResult[]
     */
    public function add(array $AdImages)
    {
        $params = [
            'AdGroups' => $AdImages
        ];
        return parent::doAdd($params);
    }

    /**
     * @param AdImageSelectionCriteria $SelectionCriteria
     */

    public function get(
        AdImageSelectionCriteria $SelectionCriteria
    )
    {

    }

    public function update()
    {

    }

}