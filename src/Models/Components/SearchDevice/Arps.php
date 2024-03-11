<?php

namespace Meklis\WildcoreApiClient\Models\Components\SearchDevice;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchingModels\Arp;
use Meklis\WildcoreApiClient\Models\Model;

class Arps extends Model
{

    protected $arps = [];

    function __construct($data, Client $httpClient = null, $strictMapping = true)
    {
        parent::__construct($httpClient, $strictMapping);

        foreach ($data as $d) {
            $this->arps[] = $this->mapper->map($d, Arp::class);
        }
    }

    /**
     * @return array
     */
    public function getArps(): array
    {
        return $this->arps;
    }

    /**
     * @param array $arps
     * @return Arps
     */
    public function setArps(array $arps): Arps
    {
        $this->arps = $arps;
        return $this;
    }


}
