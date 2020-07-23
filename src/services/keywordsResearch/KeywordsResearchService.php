<?php

namespace directapi\services\keywordsResearch;

use directapi\common\criterias\IdsCriteria;
use directapi\services\BaseService;
use directapi\services\keywordsResearch\enum\DeduplicateOperationEnum;
use directapi\services\keywordsResearch\models\DeduplicateRequestItem;
use directapi\services\keywordsResearch\models\DeduplicateActionResult;
use directapi\services\keywordsResearch\models\DeduplicateResponseAddItem;
use directapi\services\keywordsResearch\models\DeduplicateResponseUpdateItem;
use directapi\services\keywordsResearch\models\DeduplicateErrorItem;

class KeywordsResearchService extends BaseService
{
	/**
	 * @param DeduplicateRequestItem[] $DeduplicateRequestItems
	 * @param DeduplicateOperationEnum[]|null $DeduplicateOperation
	 * @return DeduplicateActionResult
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 * @throws \JsonMapper_Exception
	 * @throws \directapi\exceptions\DirectAccountNotExistException
	 * @throws \directapi\exceptions\DirectApiException
	 * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
	 * @throws \directapi\exceptions\LoginIsUsedAlreadyException
	 * @throws \directapi\exceptions\RequestValidationException
	 * @throws \directapi\exceptions\UnknownPropertyException
	 */
	public function deduplicate(array $DeduplicateRequestItems, ?array $DeduplicateOperation = null)
	{
		$params = [
			'Keywords' => $DeduplicateRequestItems,
		];
		if (is_array($DeduplicateOperation))
		{
			$params['Operation'] = $DeduplicateOperation;
		}

		$result = $this->call('deduplicate', $params);

		return new DeduplicateActionResult([
			'Add' => $this->mapArray($result->Add ?? array(), DeduplicateResponseAddItem::class),
			'Update' => $this->mapArray($result->Update ?? array(), DeduplicateResponseUpdateItem::class),
			'Delete' => $this->mapArray($result->Delete ?? array(), IdsCriteria::class),
			'Failure' => $this->mapArray($result->Failure ?? array(), DeduplicateErrorItem::class),
		]);
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
		return 'keywordsresearch';
	}
}