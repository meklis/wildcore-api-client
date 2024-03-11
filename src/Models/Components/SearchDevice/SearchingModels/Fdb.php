<?php

namespace Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchingModels;


use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface;
use Meklis\WildcoreApiClient\Models\Devices\Device;

class Fdb
{
    /**
     * @var int
     */
    protected $vlanId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $mac;

    /**
     * @var DeviceSwcoreIface|null
     */
    protected $interface;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var Device|null
     */
    protected $device;

    /**
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }

    /**
     * @param int $vlanId
     * @return Fdb
     */
    public function setVlanId(int $vlanId): Fdb
    {
        $this->vlanId = $vlanId;
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
     * @return Fdb
     */
    public function setStatus(string $status): Fdb
    {
        $this->status = $status;
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
     * @return Fdb
     */
    public function setMac(string $mac): Fdb
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * @return DeviceSwcoreIface|null
     */
    public function getInterface(): ?DeviceSwcoreIface
    {
        return $this->interface;
    }

    /**
     * @param DeviceSwcoreIface|null $interface
     * @return Fdb
     */
    public function setInterface(?DeviceSwcoreIface $interface): Fdb
    {
        $this->interface = $interface;
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
     * @return Fdb
     */
    public function setSource(string $source): Fdb
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return Device|null
     */
    public function getDevice(): ?Device
    {
        return $this->device;
    }

    /**
     * @param Device|null $device
     * @return Fdb
     */
    public function setDevice(?Device $device): Fdb
    {
        $this->device = $device;
        return $this;
    }



}
