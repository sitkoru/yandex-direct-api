<?php
namespace directapi\services\dictionaries;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\RequestValidationException;
use directapi\services\BaseService;
use directapi\services\dictionaries\enum\DictionariesFieldEnum;
use ErrorException;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper_Exception;
class DictionariesService extends BaseService
{
  /**
   * @param DictionariesFieldEnum $DictionaryName
   *
   * @return array
   * @throws GuzzleException
   * @throws DirectAccountNotExistException
   * @throws DirectApiException
   * @throws DirectApiNotEnoughUnitsException
   * @throws RequestValidationException
   * @throws JsonMapper_Exception
   */
  public function get(DictionariesFieldEnum $DictionaryName): array
  {
    $params = [
      'DictionaryNames' => array($DictionaryName),
    ];
    $class = "\directapi\services\dictionaries\models\\" . $DictionaryName . 'ItemGet';
    return parent::doGet($params, $DictionaryName, $class);
  }
  /**
   * @param array $entities
   * @return array
   * @throws ErrorException
   */
  public function toUpdateEntities(array $entities): array
  {
    throw new ErrorException('Not implemented');
  }
  protected function getName(): string
  {
    return 'dictionaries';
  }
}