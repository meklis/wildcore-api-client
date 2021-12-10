<?php

namespace Meklis\WildcoreApiClient\Models\Devices;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\Models\Model;

class DevicesList extends Model
{
    protected $devices = [];
    function __construct($data, Client $httpClient = null, $strictMapping = true)
    {
        parent::__construct($httpClient, $strictMapping);
        foreach ($data as $d) {
            $devices[] = $this->mapper->map($d, Device::class);
        }
    }

    /**
     * @return array
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @param array $devices
     * @return DevicesList
     */
    public function setDevices(array $devices): DevicesList
    {
        $this->devices = $devices;
        return $this;
    }

}
