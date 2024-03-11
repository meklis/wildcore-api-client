<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic;

use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceIface;
use Meklis\WildcoreApiClient\Models\Devices\Device;

class InterfaceDiagnostic
{
    /**
     * @var Detailed
     */
    protected $detailed;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string[]
     */
    protected $statusFlags;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var Device
     */
    protected $device;

    /**
     * @return \Meklis\WildcoreApiClient\Models\Components\Diagnostic\Detailed
     */
    public function getDetailed(): \Meklis\WildcoreApiClient\Models\Components\Diagnostic\Detailed
    {
        return $this->detailed;
    }

    /**
     * @param \Meklis\WildcoreApiClient\Models\Components\Diagnostic\Detailed $detailed
     * @return InterfaceDiagnostic
     */
    public function setDetailed(\Meklis\WildcoreApiClient\Models\Components\Diagnostic\Detailed $detailed): InterfaceDiagnostic
    {
        $this->detailed = $detailed;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return InterfaceDiagnostic
     */
    public function setType(string $type): InterfaceDiagnostic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusFlags(): array
    {
        return $this->statusFlags;
    }

    /**
     * @param string[] $statusFlags
     * @return InterfaceDiagnostic
     */
    public function setStatusFlags(array $statusFlags): InterfaceDiagnostic
    {
        $this->statusFlags = $statusFlags;
        return $this;
    }

    /**
     * @return DeviceIface
     */
    public function getInterface(): DeviceIface
    {
        return $this->interface;
    }

    /**
     * @param DeviceIface $interface
     * @return InterfaceDiagnostic
     */
    public function setInterface(DeviceIface $interface): InterfaceDiagnostic
    {
        $this->interface = $interface;
        return $this;
    }

    /**
     * @return Device
     */
    public function getDevice(): Device
    {
        return $this->device;
    }

    /**
     * @param Device $device
     * @return InterfaceDiagnostic
     */
    public function setDevice(Device $device): InterfaceDiagnostic
    {
        $this->device = $device;
        return $this;
    }


}
