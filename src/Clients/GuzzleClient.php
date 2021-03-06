<?php

namespace Meklis\WildcoreApiClient\Clients;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\WildcoreApiClient;
use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;

class GuzzleClient extends Client
{

    function __construct(WildcoreApiClient $client, $additionalGuzzleConfig = [])
    {
        $guzzleConfig = array_merge([
            'base_uri' => $client->getBaseUrl(),
            'http_errors' => false,
            'headers' => [
                'X-Auth-Key' => $client->getApiToken(),
                'Content-Type' => 'application/json',
                'User-Agent' => $client->getUserAgent(),
            ],
        ], $additionalGuzzleConfig);
        parent::__construct($guzzleConfig);
    }

    function get($uri, array $options = []): ResponseInterface
    {

        $response = parent::get($uri, $options);
        WildcoreApiClient::hasError($response);
        return $response;
    }

    function post($uri, array $options = []): ResponseInterface
    {
        $response = parent::post($uri, $options);
        WildcoreApiClient::hasError($response);
        return $response;
    }

    function put($uri, array $options = []): ResponseInterface
    {
        $response = parent::put($uri, $options);
        WildcoreApiClient::hasError($response);
        return $response;
    }

    function delete($uri, array $options = []): ResponseInterface
    {
        $response = parent::delete($uri, $options);
        WildcoreApiClient::hasError($response);
        return $response;
    }
}
