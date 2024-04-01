<?php

namespace Meklis\WildcoreApiClient\Models\DeviceAccess;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceAccesses extends Model
{

    /**
     * @param $id
     * @return DeviceAccess
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getById($id) {
        return $this->mapper->map(json_decode($this->httpClient->get('device-access/'.$id)->getBody(), true)['data'], DeviceAccess::class);
    }

    /**
     * @return DeviceAccess[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function list() {
        $data = json_decode($this->httpClient->get('device-access')->getBody(), true)['data'];
        return array_map(function ($d) {
            return $this->mapper->map($d, DeviceAccess::class);
        }, $data);
    }

    function create(DeviceAccess $deviceAccess)
    {
        return $this->mapper->map(json_decode($this->httpClient->post('device-access', [
            RequestOptions::JSON => $deviceAccess->getAsArray()
        ])->getBody(), true)['data'], DeviceAccess::class);
    }

    function update(DeviceAccess $deviceAccess)
    {
        return $this->mapper->map(json_decode($this->httpClient->put("device-access/{$deviceAccess->getId()}", [
            RequestOptions::JSON => $deviceAccess->getAsArray()
        ])->getBody(), true)['data'], DeviceAccess::class);
    }

    function delete(DeviceAccess $deviceAccess)
    {
        return  json_decode($this->httpClient->delete("device-access/{$deviceAccess->getId()}")->getBody(), true)['data'] ;
    }
}