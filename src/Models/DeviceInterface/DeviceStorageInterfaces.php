<?php

namespace Meklis\WildcoreApiClient\Models\DeviceInterface;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\DeviceAccess\DeviceAccess;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceStorageInterfaces  extends Model
{

    const url = 'device-interface';

    /**
     * @param DeviceInterfaceSearchParameters $parameters
     * @return DeviceStorageInterface[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function searchByParameters(DeviceInterfaceSearchParameters $parameters) {
        $searchResult = json_decode($this->httpClient->get(self::url . "/search", [
            'query' => $parameters->getAsArray()
        ])->getBody(),true)['data'];
        $data = [];
        foreach ($searchResult as $res) {
            $data[] = $this->mapper->map($res, DeviceStorageInterface::class);
        }
        return $data;
    }

    /**
     * @param Device $device
     * @return DeviceStorageInterface[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function getByDevice(Device $device)
    {
        $searchResult = json_decode($this->httpClient->get(self::url . "/by-device/{$device->getId()}")->getBody(),true)['data'];
        $data = [];
        foreach ($searchResult as $res) {
            $data[] = $this->mapper->map($res, DeviceStorageInterface::class);
        }
        return $data;
    }

    /**
     * @param DeviceStorageInterface $iface
     * @return DeviceStorageInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function create(DeviceStorageInterface $iface)
    {
        return $this->mapper->map(json_decode($this->httpClient->post('device-interface', [
            RequestOptions::JSON => $iface->getAsArray()
        ])->getBody(), true)['data'], DeviceStorageInterface::class);
    }

    function update(DeviceStorageInterface $iface)
    {
        return $this->mapper->map(json_decode($this->httpClient->put("device-interface/{$iface->getId()}", [
            RequestOptions::JSON => $iface->getAsArray()
        ])->getBody(), true)['data'], DeviceStorageInterface::class);
    }

    function delete(DeviceStorageInterface $iface)
    {
        return  json_decode($this->httpClient->delete("device-access/{$iface->getId()}")->getBody(), true)['data'] ;
    }
}
