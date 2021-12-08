<?php

namespace Meklis\WildcoreApiClient\Models;


use GuzzleHttp\Client;

abstract class Model
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient = null)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param $input
     * @return static
     */
    public static function parse($input)
    {
        return null;
    }

    /**
     *
     * @param Client $httpClient
     */
    public function setHttpClient(Client $httpClient = null)
    {
        $this->httpClient = $httpClient;
    }
}
