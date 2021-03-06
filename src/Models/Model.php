<?php

namespace Meklis\WildcoreApiClient\Models;


use GuzzleHttp\Client;
use Meklis\ArrToObjectMapper\Mapper;
use Meklis\WildcoreApiClient\WildcoreApiClient;

abstract class Model
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var Mapper
     */
    protected $mapper;

    /**
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient = null, $strictMapping = true)
    {
        if(!$httpClient) {
            $this->httpClient = WildcoreApiClient::$httpClient;
        } else {
            $this->httpClient = $httpClient;
        }
        $this->mapper = (new Mapper())->setStrict($strictMapping);
    }

    /**
     *
     * @param Client $httpClient
     */
    public function setHttpClient(Client $httpClient = null)
    {
        $this->httpClient = $httpClient;
    }

    function getAsArray($object = null, $displayAllProps = false) {
        $return = [];
        if($object === null) {
            $object = $this;
        }
        foreach ($this->getProperties($object) as $propName=>$propValues) {
            if(!$displayAllProps && isset($propValues['display']) && trim($propValues['display']) === 'no') {
                continue;
            }
            $displayedName = $propName;
            if(isset($propValues['name'])) {
                $displayedName = trim($propValues['name']);
            }
            if(is_object($this->$propName) && method_exists($this->$propName, 'getAsArray') ) {
                $return[$displayedName] = $this->$propName->getAsArray();
            } else {
                $return[$displayedName] = $this->$propName;
            }
        }
        return $return;
    }
    private function getProperties($model)
    {
        $reflect = new \ReflectionClass($model);
        $properties = $reflect->getProperties();
        $props = [];
        foreach ($properties as $property) {
            $doc = $property->getDocComment();
            $props[$property->getName()] = null;
            if ($doc && preg_match_all('/\@prop\.(.*)?=(.*)/', $doc, $matches)) {
                foreach ($matches[1] as $key => $name) {
                    $value = $matches[2][$key];
                    $props[$property->getName()][$name] = $value;
                }
            }
        }
        return $props;
    }

    function __set($key, $value) {
        $this->$key = $value;
    }
    function __get($key) {
        return isset($this->$key) ? $this->$key : null;
    }

    function __toString()
    {
        return json_encode($this->getAsArray(), JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
    }
}
