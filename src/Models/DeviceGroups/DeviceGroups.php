<?php

namespace Meklis\WildcoreApiClient\Models\DeviceGroups;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceGroups extends Model
{

    /**
     * @param $id
     * @return DeviceGroup
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getById($id) {
        return $this->mapper->map(json_decode($this->httpClient->get('device-group/'.$id)->getBody(), true)['data'], DeviceGroup::class);
    }

    /**
     * @return DeviceGroup[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function list() {
        $data = json_decode($this->httpClient->get('device-group')->getBody(), true)['data'];
        return array_map(function ($d) {
            return $this->mapper->map($d, DeviceGroup::class);
        }, $data);
    }

    /**
     * @param DeviceGroup $deviceGroup
     * @return DeviceGroup
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function create(DeviceGroup $deviceGroup)
    {
        return $this->mapper->map(json_decode($this->httpClient->post('device-group', [
            RequestOptions::JSON => $deviceGroup->getAsArray()
        ])->getBody(), true)['data'], DeviceGroup::class);
    }

    /**
     * @param DeviceGroup $deviceGroup
     * @return DeviceGroup
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function update(DeviceGroup $deviceGroup)
    {
        return $this->mapper->map(json_decode($this->httpClient->put("device-group/{$deviceGroup->getId()}", [
            RequestOptions::JSON => $deviceGroup->getAsArray()
        ])->getBody(), true)['data'], DeviceGroup::class);
    }

    function delete(DeviceGroup $deviceGroup)
    {
        return  json_decode($this->httpClient->delete("device-group/{$deviceGroup->getId()}")->getBody(), true)['data'] ;
    }
}