<?php

namespace Meklis\WildcoreApiClient\Models\Components\HuaweiUnregisteredOnts;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Devices\DevicesList;
use Meklis\WildcoreApiClient\Models\Model;

class HuaweiUnregisteredOnts extends Model
{
    const url = 'component/huawei_onts_registration/';

    /**
     * @param Device|null $device
     * @return UnregisteredOnt[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getUnregistered(?Device $device = null, $from = 'cache')
    {
        $url = self::url . "unregistered";
        if($device) {
            $url .= "/{$device->getId()}?from={$from}";
        } else {
            $url .= "?from={$from}";
        }
        $data = [];
        foreach (json_decode($this->httpClient->get($url)->getBody(), true)['data'] as $dt) {
            $data[] = $this->mapper->map($dt, UnregisteredOnt::class);
        }
        return  $data;
    }

    /**
     * @param UnregisteredOnt $ont
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function getVariables(UnregisteredOnt $ont, $parameters = [])
    {
        $ident = $ont->getSerial() ? $ont->getSerial() : $ont->getMacAddress();
        $url = self::url . "unregistered/{$ont->getDevice()->getId()}/{$ident}";
        return json_decode($this->httpClient->post($url, [
            RequestOptions::JSON => $parameters,
        ])->getBody(), true)['data'];
    }

    /**
     * @param UnregisteredOnt $ont
     * @param $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function registerOnt(UnregisteredOnt $ont, $parameters = [])
    {
        $ident = $ont->getSerial() ? $ont->getSerial() : $ont->getMacAddress();
        $url = self::url . "register/{$ont->getDevice()->getId()}/{$ident}";
        return json_decode($this->httpClient->post($url, [
            RequestOptions::JSON => $parameters,
        ])->getBody(), true)['data'];
    }
}