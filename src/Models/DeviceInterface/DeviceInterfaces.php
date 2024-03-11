<?php

namespace Meklis\WildcoreApiClient\Models\DeviceInterface;

use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Devices\DevicesList;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceInterfaces  extends Model
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

}
