<?php

namespace directapi;

use directapi\components\interfaces\IQueryLogger;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\LoginIsUsedAlreadyException;
use directapi\exceptions\RequestValidationException;
use directapi\services\adextensions\AdExtensionsService;
use directapi\services\adgroups\AdGroupsService;
use directapi\services\adimages\AdImagesService;
use directapi\services\ads\AdsService;
use directapi\services\agencyclients\AgencyClientsService;
use directapi\services\audiencetargets\AudienceTargetsService;
use directapi\services\BaseService;
use directapi\services\bidmodifiers\BidModifiersService;
use directapi\services\bids\BidsService;
use directapi\services\campaigns\CampaignsService;
use directapi\services\changes\ChangesService;
use directapi\services\clients\ClientsService;
use directapi\services\dictionaries\DictionariesService;
use directapi\services\keywordbids\KeywordBidsService;
use directapi\services\keywords\KeywordsService;
use directapi\services\keywordsResearch\KeywordsResearchService;
use directapi\services\reports\ReportsService;
use directapi\services\retargetinglists\RetargetingListsService;
use directapi\services\sitelinks\SitelinksService;
use directapi\services\vcards\VCardsService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use InvalidArgumentException;
use function is_array;
use function is_object;
use JsonMapper;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use RuntimeException;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Throwable;

class DirectApiService
{
    public const ERROR_CODE_CONCURRENT_LIMIT = 506;
    public const ERROR_CODE_NOT_ENOUGH_UNITS = 152;
    public const ERROR_CODE_NOT_EXIST_DIRECT_ACCOUNT = 513;
    public const ERROR_CODE_LOGIN_IS_USED_ALREADY = 5200;

    /**
     * @var int
     */
    public $units = 0;

    /**
     * @var int
     */
    public $lastCallCost = 0;

    /**
     * @var int
     */
    public $unitsLimit = 0;

    /**
     * @var DirectApiLogger
     */
    public $logger;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $clientLogin;

    /**
     * @var AdGroupsService
     */
    private $adGroupsService;

    /**
     * @var AdImagesService
     */
    private $adImagesService;

    /**
     * @var AdsService
     */
    private $adsService;

    /**
     * @var BidModifiersService
     */
    private $bidModifiersService;

    /**
     * @var BidsService
     */
    private $bidsService;

    /**
     * @var KeywordBidsService
     */
    private $keywordBidsService;

    /**
     * @var CampaignsService
     */
    private $campaignsService;

    /**
     * @var ChangesService
     */
    private $changesService;

    /**
     * @var KeywordsService
     */
    private $keywordsService;

    /**
     * @var KeywordsResearchService
     */
    private $keywordsResearchService;

    /**
     * @var SitelinksService
     */
    private $sitelinksService;

    /**
     * @var VCardsService
     */
    private $vcardsService;

    /**
     * @var ClientsService
     */
    private $clientsService;

    /**
     * @var AgencyClientsService
     */
    private $agencyClientsService;

    /**
     * @var ReportsService
     */
    private $reportsService;

    /**
     * @var AdExtensionsService
     */
    private $adExtensionsService;

    /**
     * @var RetargetingListsService
     */
    private $retargetingListsService;

    /**
     * @var AudienceTargetsService
     */
    private $audienceTargetsService;

    /**
     * @var DictionariesService
     */
    private $dictionariesService;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var JsonMapper
     */
    private $mapper;

    /**
     * @var bool
     */
    private $useSandbox = false;

    public function __construct(
        ?string $token = null,
        ?string $clientLogin = null,
        ?IQueryLogger $queryLogger = null,
        ?LoggerInterface $logger = null,
        bool $useSandbox = false
    ) {
        $this->token = $token;
        $this->clientLogin = $clientLogin;
        $this->logger = new DirectApiLogger($queryLogger, $logger);
        $this->useSandbox = $useSandbox;
    }

    /**
     * @return AdGroupsService
     */
    public function getAdGroupsService(): AdGroupsService
    {
        if (!$this->adGroupsService) {
            $this->adGroupsService = new AdGroupsService($this);
        }
        return $this->adGroupsService;
    }

    /**
     * @return AdImagesService
     */
    public function getAdImagesService(): AdImagesService
    {
        if (!$this->adImagesService) {
            $this->adImagesService = new AdImagesService($this);
        }
        return $this->adImagesService;
    }

    /**
     * @return AdsService
     */
    public function getAdsService(): AdsService
    {
        if (!$this->adsService) {
            $this->adsService = new AdsService($this);
        }
        return $this->adsService;
    }

    /**
     * @return BidModifiersService
     */
    public function getBidModifiersService(): BidModifiersService
    {
        if (!$this->bidModifiersService) {
            $this->bidModifiersService = new BidModifiersService($this);
        }
        return $this->bidModifiersService;
    }

    /**
     * @return BidsService
     */
    public function getBidsService(): BidsService
    {
        if (!$this->bidsService) {
            $this->bidsService = new BidsService($this);
        }
        return $this->bidsService;
    }

    /**
     * @return KeywordBidsService
     */
    public function getKeywordBidsService(): KeywordBidsService
    {
        if (!$this->keywordBidsService) {
            $this->keywordBidsService = new KeywordBidsService($this);
        }
        return $this->keywordBidsService;
    }

    /**
     * @return CampaignsService
     */
    public function getCampaignsService(): CampaignsService
    {
        if (!$this->campaignsService) {
            $this->campaignsService = new CampaignsService($this);
        }
        return $this->campaignsService;
    }

    /**
     * @return ChangesService
     */
    public function getChangesService(): ChangesService
    {
        if (!$this->changesService) {
            $this->changesService = new ChangesService($this);
        }
        return $this->changesService;
    }

    /**
     * @return KeywordsService
     */
    public function getKeywordsService(): KeywordsService
    {
        if (!$this->keywordsService) {
            $this->keywordsService = new KeywordsService($this);
        }
        return $this->keywordsService;
    }

    /**
     * @return KeywordsResearchService
     */
    public function getKeywordsResearchService(): KeywordsResearchService
    {
        if (!$this->keywordsResearchService) {
            $this->keywordsResearchService = new KeywordsResearchService($this);
        }
        return $this->keywordsResearchService;
    }

    /**
     * @return SitelinksService
     */
    public function getSitelinksService(): SitelinksService
    {
        if (!$this->sitelinksService) {
            $this->sitelinksService = new SitelinksService($this);
        }
        return $this->sitelinksService;
    }

    /**
     * @return VCardsService
     */
    public function getVCardsService(): VCardsService
    {
        if (!$this->vcardsService) {
            $this->vcardsService = new VCardsService($this);
        }
        return $this->vcardsService;
    }

    /**
     * @return ClientsService
     */
    public function getClientsService(): ClientsService
    {
        if (!$this->clientsService) {
            $this->clientsService = new ClientsService($this);
        }
        return $this->clientsService;
    }

    /**
     * @return AgencyClientsService
     */
    public function getAgencyClientsService(): AgencyClientsService
    {
        if (!$this->agencyClientsService) {
            $this->agencyClientsService = new AgencyClientsService($this);
        }
        return $this->agencyClientsService;
    }

    /**
     * @return ReportsService
     */
    public function getReportsService(): ReportsService
    {
        if (!$this->reportsService) {
            $this->reportsService = new ReportsService($this, $this->useSandbox);
        }
        return $this->reportsService;
    }

    /**
     * @return AdExtensionsService
     */
    public function getAdExtensionsService(): AdExtensionsService
    {
        if (!$this->adExtensionsService) {
            $this->adExtensionsService = new AdExtensionsService($this);
        }
        return $this->adExtensionsService;
    }

    /**
     * @return RetargetingListsService
     */
    public function getRetargetingListsService(): RetargetingListsService
    {
        if (!$this->retargetingListsService) {
            $this->retargetingListsService = new RetargetingListsService($this);
        }
        return $this->retargetingListsService;
    }

    /**
     * @return AudienceTargetsService
     */
    public function getAudienceTargetsService(): AudienceTargetsService
    {
        if (!$this->audienceTargetsService) {
            $this->audienceTargetsService = new AudienceTargetsService($this);
        }
        return $this->audienceTargetsService;
    }

    /**
     * @return \directapi\services\dictionaries\DictionariesService
     */
    public function getDictionariesServiceService(): DictionariesService
    {
        if (!$this->dictionariesService) {
            $this->dictionariesService = new DictionariesService($this);
        }
        return $this->dictionariesService;
    }

    /**
     * @param string $serviceName
     * @param string $method
     * @param array  $params
     * @param bool   $sendClientLogin
     *
     * @return mixed
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws GuzzleException
     * @throws LoginIsUsedAlreadyException
     * @throws RequestValidationException
     */
    public function call($serviceName, $method, array $params = [], $sendClientLogin = true)
    {
        if (is_null($this->token)) {
            throw new DirectApiException("Не указан ключ API.");
        }

        $jsonParams = json_encode($params);
        $this->logger->debug("Call method {$method} of service {$serviceName}. Params: {$jsonParams}");
        $request = new DirectApiRequest();
        $request->service = $serviceName;
        $request->method = $method;
        $request->sendClientLogin = $sendClientLogin;

        if ($params) {
            $errors = [];
            $this->validate($params, $errors);
            if ($errors) {
                throw new RequestValidationException($errors);
            }
            $request->params = $params;
        }


        $data = $this->getResponse($request);
        $this->logger->debug('Call succeeded');
        return $data->getData()->result;
    }

    /**
     * @param array|object $params
     * @param array        $errors
     */
    public function validate($params, array &$errors): void
    {
        if (is_array($params) || is_object($params)) {
            foreach ($params as $key => $value) {
                if (!is_array($value) && !is_object($value)) {
                    continue;
                }
                $result = $this->getValidator()->validate($value, null, true);
                if ($result) {
                    foreach ($result as $error) {
                        if (!isset($errors[$key])) {
                            $errors[$key] = [];
                        }
                        /**
                         * @var ConstraintViolation $error
                         */
                        $errors[$key][$error->getPropertyPath()] = $error->getMessage();
                    }
                }
            }
        }
    }

    /**
     * @return ValidatorInterface
     */
    private function getValidator(): ValidatorInterface
    {
        if (!$this->validator) {
            $this->validator = Validation::createValidatorBuilder()
                ->enableAnnotationMapping()
                ->getValidator();
        }
        return $this->validator;
    }

    /**
     * @param DirectApiRequest $request
     *
     * @return DirectApiResponse
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws GuzzleException
     * @throws LoginIsUsedAlreadyException
     */
    public function getResponse(DirectApiRequest $request): DirectApiResponse
    {
        $this->lastCallCost = null;
        $httpRequest = $this->getRequest(
            BaseService::getApiUrl($this->useSandbox) . $request->service,
            'POST',
            $request->sendClientLogin
        );

        $payload = json_encode($request->getPayload(), JSON_UNESCAPED_UNICODE);
        $payload = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $payload);

        $httpResponse = $this->doRequest($httpRequest->withBody(Utils::streamFor($payload)));
        $response = new DirectApiResponse();

        $response->setHeaders($httpResponse->getHeaders());
        $response->body = $httpResponse->getBody()->getContents();
        $data = $response->getData();

        $this->units = $response->units;
        $this->lastCallCost = $response->lastCallCost;
        $this->unitsLimit = $response->unitsLimit;


        if (isset($data->error)) {
            $response->isSuccess = false;
            if ((int)$data->error->error_code === self::ERROR_CODE_CONCURRENT_LIMIT) { //concurrent limit
                $this->logger->debug('Concurrent limit error. Sleep and try again.');
                usleep(100);
                $this->logger->logRequest($request, $response);
                return $this->getResponse($request);
            }
            $this->logger->logRequest($request, $response);
            if ((int)$data->error->error_code === self::ERROR_CODE_NOT_EXIST_DIRECT_ACCOUNT) {
                throw new DirectAccountNotExistException(
                    $data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                    $data->error->error_code
                );
            }
            if ((int)$data->error->error_code === self::ERROR_CODE_NOT_ENOUGH_UNITS) {
                throw new DirectApiNotEnoughUnitsException(
                    $data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                    $data->error->error_code
                );
            }
            if ((int)$data->error->error_code === self::ERROR_CODE_LOGIN_IS_USED_ALREADY) {
                throw new LoginIsUsedAlreadyException(
                    $data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                    $data->error->error_code
                );
            }
            throw new DirectApiException(
                $data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                $data->error->error_code
            );
        }
        $response->isSuccess = true;
        if (!is_object($data)) {
            $this->logger->logRequest($request, $response);
            throw new DirectApiException('Ошибка при получении данных кампании (' . $request->service . ', ' . $request->method . ')' . var_export(
                $request->params,
                true
            ));
        }
        $this->logger->logRequest($request, $response);
        return $response;
    }

    /**
     * @param        $url
     * @param string $method
     * @param bool   $sendClientLogin
     *
     * @return RequestInterface
     */
    public function getRequest(string $url, string $method = 'POST', bool $sendClientLogin = true): RequestInterface
    {
        return new Request($method, $url, $this->getRequestHeaders($sendClientLogin));
    }

    private function getRequestHeaders(bool $sendClientLogin): array
    {
        $headers = [
            'Content-Type'    => 'application/json; charset=utf-8',
            'Authorization'   => 'Bearer ' . $this->token,
            'Accept-Language' => 'ru',
        ];
        if ($this->clientLogin && $sendClientLogin) {
            $headers['Client-Login'] = $this->clientLogin;
        }
        return $headers;
    }

    /**
     * @param RequestInterface $request
     * @param int              $try
     * @param int              $maxTry
     *
     * @return ResponseInterface
     *
     * @throws DirectApiException
     * @throws GuzzleException
     */
    public function doRequest(
        RequestInterface $request,
        int $try = 0,
        int $maxTry = 5
    ): ResponseInterface {
        try {
            $response = $this->getClient()->send($request);
        } catch (ConnectException $exception) {
            $try++;
            if ($try < $maxTry) {
                $response = $this->doRequest($request, $try);
            } else {
                throw new DirectApiException(
                    'Ошибка при подключении к яндексу: ' . $exception->getMessage() . ' Code: ' . $exception->getCode(),
                    $exception->getCode(),
                    $exception
                );
            }
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
            if ($response) {
                $response = $response->getBody()->getContents();
            } else {
                $response = '';
            }
            throw new DirectApiException(
                'Ошибка при отправке запроса к яндексу: ' . $exception->getMessage() . '. Response: ' . $response . ' Code: ' . $exception->getCode(),
                $exception->getCode(),
                $exception,
                $response
            );
        } catch (Throwable $exception) {
            throw new DirectApiException(
                'Ошибка при запросе к яндексу' . $exception->getMessage() . ' Code: ' . $exception->getCode(),
                $exception->getCode(),
                $exception
            );
        }
        return $response;
    }

    private function getClient(): Client
    {
        return new Client();
    }

    /**
     * @return JsonMapper
     */
    public function getMapper(): JsonMapper
    {
        if (!$this->mapper) {
            $this->mapper = new JsonMapper();
            $this->mapper->bStrictNullTypes = false;
        }

        return $this->mapper;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @param string $clientLogin
     */
    public function setClientLogin(string $clientLogin): void
    {
        $this->clientLogin = $clientLogin;
    }

    /**
     * @param bool $useSandbox
     */
    public function setUseSandbox(bool $useSandbox): void
    {
        $this->useSandbox = $useSandbox;
    }

    /**
     * @param DirectApiLogger $logger
     */
    public function setLogger(DirectApiLogger $logger): void
    {
        $this->logger = $logger;
    }
}
