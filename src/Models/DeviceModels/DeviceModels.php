<?php

namespace Meklis\WildcoreApiClient\Models\DeviceModels;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceModels extends Model
{

    /**
     * @param $id
     * @return DeviceModel
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getById($id) {
        return $this->mapper->map(json_decode($this->httpClient->get('device-model/'.$id)->getBody(), true)['data'], DeviceModel::class);
    }
    /**
     * @return DeviceModel[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function list() {
        $data = json_decode($this->httpClient->get('device-model')->getBody(), true)['data'];
        return array_map(function ($d) {
            return $this->mapper->map($d, DeviceModel::class);
        }, $data);
    }

    function create(DeviceModel $deviceAccess)
    {
        return $this->mapper->map(json_decode($this->httpClient->post('device-model', [
            RequestOptions::JSON => $deviceAccess->getAsArray()
        ])->getBody(), true)['data'], DeviceModel::class);
    }

    function update(DeviceModel $deviceAccess)
    {
        return $this->mapper->map(json_decode($this->httpClient->put("device-model/{$deviceAccess->getId()}", [
            RequestOptions::JSON => $deviceAccess->getAsArray()
        ])->getBody(), true)['data'], DeviceModel::class);
    }

    function delete(DeviceModel $deviceAccess)
    {
        return  json_decode($this->httpClient->delete("device-model/{$deviceAccess->getId()}")->getBody(), true)['data'] ;
    }
}