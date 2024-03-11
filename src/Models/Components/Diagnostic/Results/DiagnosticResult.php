<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results;

use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceStorageInterface;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\DeviceStatus\DeviceStatusData;

class DiagnosticResult
{
    /**
     * @var DeviceStorageInterface
     */
    protected $iface;


    /**
     * @var DiagnosticResultDiagnosticData
     */
    protected $diagnostic;

    /**
     * @var DiagnosticResultDeviceStatus
     */
    protected $deviceStatus;

    public function getIface(): DeviceStorageInterface
    {
        return $this->iface;
    }


    public function getDiagnostic(): DiagnosticResultDiagnosticData
    {
        return $this->diagnostic;
    }


    public function getDeviceStatus(): DiagnosticResultDeviceStatus
    {
        return $this->deviceStatus;
    }


}