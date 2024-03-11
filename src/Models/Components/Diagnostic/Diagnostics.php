<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;

class Diagnostics extends Model
{

    /**
     * @param string $deviceIp
     * @param $interface
     * @return mixed
     * @throws GuzzleException
     * @throws \ReflectionException
     */
    function interfaceDiagnostic(string $deviceIp, $interface) {
        $data = json_decode($this->httpClient->post('component/diagnostic/interface-diag', [
           RequestOptions::JSON => [
               'device' => $deviceIp,
               'interface' => $interface,
           ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, InterfaceDiagnostic::class);
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
