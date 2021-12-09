<?php

namespace Meklis\WildcoreApiClient\Models\SearchDevice;

use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;

class FoundMacAddress
{
    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var int
     */
    protected $vlan_id;

    /**
     * @var string
     */
    protected $mac;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var Device
     */
    protected $device;

    /**
     * @return DeviceIface
     */
    public function getInterface(): DeviceIface
    {
        return $this->interface;
    }

    /**
     * @param DeviceIface $interface
     * @return FoundMacAddress
     */
    public function setInterface(DeviceIface $interface): FoundMacAddress
    {
        $this->interface = $interface;
        return $this;
    }

    /**
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlan_id;
    }

    /**
     * @param int $vlan_id
     * @return FoundMacAddress
     */
    public function setVlanId(int $vlan_id): FoundMacAddress
    {
        $this->vlan_id = $vlan_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }

    /**
     * @param string $mac
     * @return FoundMacAddress
     */
    public function setMac(string $mac): FoundMacAddress
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return FoundMacAddress
     */
    public function setStatus(string $status): FoundMacAddress
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return FoundMacAddress
     */
    public function setSource(string $source): FoundMacAddress
    {
        $this->source = $source;
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
     * @return FoundMacAddress
     */
    public function setDevice(Device $device): FoundMacAddress
    {
        $this->device = $device;
        return $this;
    }


}
