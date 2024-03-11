<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results\DiagnosticResult;
use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceStorageInterface;
use Meklis\WildcoreApiClient\Models\Model;

class Diagnostics extends Model
{

    /**
     * @param DeviceStorageInterface $iface
     * @param $from
     * @return DiagnosticResult
     * @throws GuzzleException
     * @throws \ReflectionException
     */
    function interfaceDiagnostic(DeviceStorageInterface $iface, $from = 'cache') {
        $data = json_decode($this->httpClient->get("component/diagnostic/interface/{$iface->getId()}/diag", [
           'query' => [
               'from' => $from,
           ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, DiagnosticResult::class);
    }


    /**
     * @param $router
     * @param $ipAddress
     * @return ArpPings
     * @throws GuzzleException
     */
    function arpPing($router, $ipAddress) {
        $data = json_decode($this->httpClient->post('component/diagnostic/arp-ping', [
            RequestOptions::JSON => [
                'router' => $router,
                'ip' => $ipAddress,
            ]
        ])->getBody(), true)['data'];
        return new ArpPings($this->httpClient, $data);
    }
}
