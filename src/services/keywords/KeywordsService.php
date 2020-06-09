<?php

namespace directapi\services\keywords;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\keywords\criterias\KeywordsSelectionCriteria;
use directapi\services\keywords\enum\KeywordFieldEnum;
use directapi\services\keywords\models\KeywordAddItem;
use directapi\services\keywords\models\KeywordGetItem;
use directapi\services\keywords\models\KeywordUpdateItem;

class KeywordsService extends BaseService
{
    /**
     * @param KeywordAddItem[] $Keywords
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $Keywords): array
    {
        $params = [
            'Keywords' => $Keywords
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
     * @param KeywordsSelectionCriteria $SelectionCriteria
     * @param KeywordFieldEnum[]        $FieldNames
     * @param LimitOffset|null          $Page
     *
     * @return KeywordGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        KeywordsSelectionCriteria $SelectionCriteria,
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

        return parent::doGet($params, 'Keywords', KeywordGetItem::class);
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
     * @inheritdoc
     */
    public function suspend(IdsCriteria $SelectionCriteria): array
    {
        return parent::suspend($SelectionCriteria);
    }

    /**
     * @param KeywordUpdateItem[] $Keywords
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function update(array $Keywords): array
    {
        $params = [
            'Keywords' => $Keywords
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param KeywordGetItem[] $entities
     *
     * @return KeywordUpdateItem[]
     *
     * @throws \JsonMapper_Exception
     */
    public function toUpdateEntities(array $entities): array
    {
        return $this->convertClass($entities, KeywordUpdateItem::class);
    }

    protected function getName(): string
    {
        return 'keywords';
    }
}
