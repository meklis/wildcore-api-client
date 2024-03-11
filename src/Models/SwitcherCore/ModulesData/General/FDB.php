<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General;

class FDB
{
    /**
     * @var int | null
     */
    protected $_virtual_port;


    /**
     * @var int | null
     */
    protected $vlan_id;

    /**
     * @var string
     */
    protected $mac_address;


    /**
     * @var int | null
     */
    protected $uni;

    /**
     * @var string | null
     */
    protected $status;

    public function getVirtualPort(): ?int
    {
        return $this->_virtual_port;
    }

    public function setVirtualPort(?int $virtual_port): FDB
    {
        $this->_virtual_port = $virtual_port;
        return $this;
    }

    public function getVlanId(): ?int
    {
        return $this->vlan_id;
    }

    public function setVlanId(?int $vlan_id): FDB
    {
        $this->vlan_id = $vlan_id;
        return $this;
    }

    public function getMacAddress(): string
    {
        return $this->mac_address;
    }

    public function setMacAddress(string $mac_address): FDB
    {
        $this->mac_address = $mac_address;
        return $this;
    }

    public function getUni(): ?int
    {
        return $this->uni;
    }

    public function setUni(?int $uni): FDB
    {
        $this->uni = $uni;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): FDB
    {
        $this->status = $status;
        return $this;
    }


}