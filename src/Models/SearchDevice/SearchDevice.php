<?php

namespace Meklis\WildcoreApiClient\Models\SearchDevice;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Diagnostic\ArpPings;
use Meklis\WildcoreApiClient\Models\Diagnostic\InterfaceDiagnostic;
use Meklis\WildcoreApiClient\Models\Model;

class SearchDevice extends Model
{
    /**
     * @param array $devices
     * @param string $macAddress
     * @return FoundMacAddresses
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchMac(array $devices, string $macAddress)
    {
        $data = json_decode($this->httpClient->post('component/search_device/search-mac', [
            RequestOptions::JSON => [
                'devices' => $devices,
                'mac' => $macAddress,
            ]
        ])->getBody(), true)['data'];
        return new FoundMacAddresses($this->httpClient, $data);
    }

    /**
     * @param array $devices
     * @param string $ip
     * @return Arps
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchArp(array $devices, string $ip)
    {
        $data = json_decode($this->httpClient->post('component/search_device/search-ip', [
            RequestOptions::JSON => [
                'devices' => $devices,
                'ip' => $ip,
            ]
        ])->getBody(), true)['data'];
        return new Arps($this->httpClient, $data);
    }

    /**
     * @param array $devices
     * @param array $routers
     * @param string $ip
     * @return ArpWithFdb
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function searchArpAndFdbOverIP(array $devices, array $routers, string $ip)
    {
        $data = json_decode($this->httpClient->post('component/search_device/search-ip-with-fdb', [
            RequestOptions::JSON => [
                'devices' => $devices,
                'routers' => $routers,
                'ip' => $ip,
            ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, ArpWithFdb::class);
    }
}
