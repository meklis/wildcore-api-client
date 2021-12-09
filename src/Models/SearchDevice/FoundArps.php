<?php

namespace Meklis\WildcoreApiClient\Models\SearchDevice;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;

class FoundArps extends Model
{

    protected $arps = [];

   function __construct($data, Client $httpClient = null, $strictMapping = true)
   {
       parent::__construct($httpClient, $strictMapping);

       foreach ($data as $d) {
           $this->arps[] = $this->mapper->map($d, FoundArp::class);
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
     * @return FoundArps
     */
    public function setArps(array $arps): FoundArps
    {
        $this->arps = $arps;
        return $this;
    }



}
