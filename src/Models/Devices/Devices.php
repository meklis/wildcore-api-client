<?php

namespace Meklis\WildcoreApiClient\Models\Devices;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;

class Devices extends Model
{
    /**
     * @param $ip
     * @return Device
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getByIp($ip) {
        return $this->mapper->map(json_decode($this->httpClient->get('device?ip='.$ip)->getBody(),true)['data'], Device::class);
    }

    /**
     * @param $id
     * @return Device
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getById($id) {
        return $this->mapper->map(json_decode($this->httpClient->get('device/'.$id)->getBody(), true)['data'], Device::class);
    }

    /**
     * @return Device[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function list() {
        $data = json_decode($this->httpClient->get('device')->getBody(), true)['data'];
        return array_map(function ($d) {
            return $this->mapper->map($d, Device::class);
        }, $data);
    }

    function create(Device $device)
    {
        return $this->mapper->map(json_decode($this->httpClient->post('device', [
            RequestOptions::JSON => $device->getAsArray()
        ])->getBody(), true)['data'], Device::class);
    }
}
