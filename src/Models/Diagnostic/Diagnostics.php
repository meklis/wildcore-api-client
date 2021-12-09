<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;

use GuzzleHttp\RequestOptions;
use Meklis\ArrToObjectMapper\Mapper;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;

class Diagnostics extends Model
{
    /**
     * @param string $deviceIp
     * @param $interface
     * @return Diagnostic
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function interfaceDiagnostic(string $deviceIp, $interface) {
        $data = json_decode($this->httpClient->post('component/diagnostic/interface-diag', [
           RequestOptions::JSON => [
               'device' => $deviceIp,
               'interface' => $interface,
           ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, Diagnostic::class);
    }
}
