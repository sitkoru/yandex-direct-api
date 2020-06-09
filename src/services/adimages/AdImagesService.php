<?php

namespace directapi\services\adimages;

use directapi\common\criterias\LimitOffset;
use directapi\components\interfaces\ICriteria;
use directapi\services\adimages\criterias\AdImageIdsCriteria;
use directapi\services\adimages\criterias\AdImageSelectionCriteria;
use directapi\services\adimages\enum\AdImageFieldEnum;
use directapi\services\adimages\models\AdImageActionResult;
use directapi\services\adimages\models\AdImageAddItem;
use directapi\services\adimages\models\AdImageGetItem;
use directapi\services\BaseService;

class AdImagesService extends BaseService
{
    /**
     * @param AdImageAddItem[] $AdImages
     *
     * @return AdImageActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $AdImages): array
    {
        $params = [
            'AdImages' => $AdImages
        ];
        return $this->doAdd($params, AdImageActionResult::class);
    }

    /**
     * @param AdImageIdsCriteria | ICriteria $SelectionCriteria
     *
     * @return AdImageActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function delete($SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria, AdImageActionResult::class);
    }

    /**
     * @param AdImageSelectionCriteria $SelectionCriteria
     * @param AdImageFieldEnum[]       $FieldNames
     * @param LimitOffset              $Page
     *
     * @return AdImageGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(AdImageSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'IdImage', AdImageGetItem::class);
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
        return 'adimages';
    }
}
