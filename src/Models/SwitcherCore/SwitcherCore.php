<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;

class SwitcherCore extends Model
{
    protected $device;
    function __construct(Device $device, Client $httpClient = null, $strictMapping = true)
    {
        $this->device = $device;
        parent::__construct($httpClient, $strictMapping);
    }

    public function getModulesList() {
        $data = json_decode($this->httpClient->get("switcher-core/{$this->device->getId()}/modules")->getBody(), true)['data'];
        return $data;
    }

    public function call($moduleName, $arguments = [], $from = 'device') {
        $data = json_decode($this->httpClient->post("switcher-core/{$from}/{$moduleName}/{$this->device->getId()}", [
            RequestOptions::JSON => $arguments
        ])->getBody(), true)['data'];
        return $data;
    }
}