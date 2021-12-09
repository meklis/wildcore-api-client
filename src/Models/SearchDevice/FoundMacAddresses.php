<?php

namespace Meklis\WildcoreApiClient\Models\SearchDevice;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;

class FoundMacAddresses extends Model
{

    protected $macAddresses = [];

   function __construct($data, Client $httpClient = null, $strictMapping = true)
   {
       parent::__construct($httpClient, $strictMapping);

       foreach ($data as $d) {
           $this->macAddresses[] = $this->mapper->map($d, FoundMacAddress::class);
       }
   }

    /**
     * @return array
     */
    public function getMacAddresses(): array
    {
        return $this->macAddresses;
    }

    /**
     * @param array $macAddresses
     * @return FoundMacAddresses
     */
    public function setMacAddresses(array $macAddresses): FoundMacAddresses
    {
        $this->macAddresses = $macAddresses;
        return $this;
    }

}
