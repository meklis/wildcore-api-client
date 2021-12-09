<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


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
    protected $macAddress;

    /**
     * @var DeviceIface|null
     */
    protected $interface;

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
    public function getMacAddress(): string
    {
        return $this->macAddress;
    }

    /**
     * @param string $macAddress
     * @return Fdb
     */
    public function setMacAddress(string $macAddress): Fdb
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    /**
     * @return DeviceIface|null
     */
    public function getInterface(): ?DeviceIface
    {
        return $this->interface;
    }

    /**
     * @param DeviceIface|null $interface
     * @return Fdb
     */
    public function setInterface(?DeviceIface $interface): Fdb
    {
        $this->interface = $interface;
        return $this;
    }


}
