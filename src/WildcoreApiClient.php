<?php

namespace Meklis\WildcoreApiClient;

use Meklis\WildcoreApiClient\Clients\GuzzleClient;
use Meklis\WildcoreApiClient\Models\Components\Components;
use Meklis\WildcoreApiClient\Models\Components\Diagnostic\Diagnostics;
use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceStorageInterfaces;
use Meklis\WildcoreApiClient\Models\Devices\Devices;
use Psr\Http\Message\ResponseInterface;

class WildcoreApiClient
{
    /**
     * @var string
     */
    protected $apiToken;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var GuzzleClient
     */
    public static $httpClient;

    /**
     * @var string
     */
    protected $userAgent = '';

    /**
     * @param  string  $apiToken
     * @param  string  $baseUrl
     * @param  string  $userAgent
     */
    public function __construct(string $apiToken, string $baseUrl, string $userAgent = 'wildcore-api-client/v1')
    {
        $this->apiToken = $apiToken;
        $this->baseUrl = $baseUrl;
        $this->userAgent = $userAgent;
        self::$httpClient = new GuzzleClient($this);
    }

    /**
     * @return string
     */
    public function getApiToken(): string
    {
        return $this->apiToken;
    }

    /**
     * @param string $apiToken
     * @return WildcoreApiClient
     */
    public function setApiToken(string $apiToken): WildcoreApiClient
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return WildcoreApiClient
     */
    public function setBaseUrl(string $baseUrl): WildcoreApiClient
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * @return GuzzleClient
     */
    public function getHttpClient(): GuzzleClient
    {
        return self::$httpClient;
    }

    /**
     * @param GuzzleClient $httpClient
     * @return WildcoreApiClient
     */
    public function setHttpClient(GuzzleClient $httpClient): WildcoreApiClient
    {
        self::$httpClient = $httpClient;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return WildcoreApiClient
     */
    public function setUserAgent(string $userAgent): WildcoreApiClient
    {
        $this->userAgent = $userAgent;
        return $this;
    }


    /**
     * @param ResponseInterface $response
     * @return mixed
     * @throws ApiException
     */
    public static function throwError(ResponseInterface $response): mixed
    {
        $body = (string) $response->getBody();
        if (strlen($body) > 0) {
            $error = json_decode($body, true);
            throw new ApiException(ApiResponse::create([
                'error' => $error['error'],
            ]), $error['error']['description']);
        }
        throw new ApiException(ApiResponse::create([
            'response' => $response,
        ]), 'The response is not parseable');
    }

    /**
     * @param ResponseInterface $response
     * @return bool
     * @throws APIException
     */
    public static function hasError(ResponseInterface $response)
    {
        $responseDecoded = json_decode((string) $response->getBody(), true);
        if (strlen((string) $response->getBody()) > 0) {
            if (isset($responseDecoded['error'])) {
                self::throwError($response);
            }
        } elseif ($response->getStatusCode() <= 200 && $response->getStatusCode() >= 300) {
            self::throwError($response);
        }
        return false;
    }

    /**
     * Возвращает обьект со списком компонентов
     *
     * @return Components
     */
    public function components() {
        return new Components(self::$httpClient);
    }

    /**
     * @return Devices
     */
    public function devices() {
        return new Devices(self::$httpClient);
    }

    /**
     * Позволяет работать с сохраненными интерфейсами в системе
     *
     * @return DeviceStorageInterfaces
     */
    public function deviceInterfaces() {
        return new DeviceStorageInterfaces(self::$httpClient);
    }

    /**
     * Позволяет работать с пользователями системы
     *
     * @return Models\User\Users
     */
    public function users()
    {
        return new Models\User\Users(self::$httpClient);
    }

}
