<?php

namespace Meklis\WildcoreApiClient\Models\DeviceInterface;

use Meklis\WildcoreApiClient\Models\Model;

class DeviceInterfaceSearchParameters
{

    protected $device_id = null;
    protected $device_ip = null;
    protected $interface_name = null;
    protected $interface_bind_key = null;
    protected $ont_ident = null;
    protected $mac_address = null;
    protected $only_active_mac = true;

    public function getDeviceId()
    {
        return $this->device_id;
    }

    public function setDeviceId($device_id): DeviceInterfaceSearchParameters
    {
        $this->device_id = $device_id;
        return $this;
    }

    public function getDeviceIp()
    {
        return $this->device_ip;
    }

    public function setDeviceIp($device_ip): DeviceInterfaceSearchParameters
    {
        $this->device_ip = $device_ip;
        return $this;
    }

    public function getInterfaceName()
    {
        return $this->interface_name;
    }

    public function setInterfaceName($interface_name): DeviceInterfaceSearchParameters
    {
        $this->interface_name = $interface_name;
        return $this;
    }

    public function getInterfaceBindKey()
    {
        return $this->interface_bind_key;
    }

    public function setInterfaceBindKey($interface_bind_key): DeviceInterfaceSearchParameters
    {
        $this->interface_bind_key = $interface_bind_key;
        return $this;
    }

    public function getOntIdent()
    {
        return $this->ont_ident;
    }

    public function setOntIdent($ont_ident): DeviceInterfaceSearchParameters
    {
        $this->ont_ident = $ont_ident;
        return $this;
    }

    public function getMacAddress()
    {
        return $this->mac_address;
    }

    public function setMacAddress($mac_address): DeviceInterfaceSearchParameters
    {
        $this->mac_address = $mac_address;
        return $this;
    }

    public function isOnlyActiveMac(): bool
    {
        return $this->only_active_mac;
    }

    public function setOnlyActiveMac(bool $only_active_mac): DeviceInterfaceSearchParameters
    {
        $this->only_active_mac = $only_active_mac;
        return $this;
    }


    public function getAsArray()
    {
        $arr = [];
        if($this->device_id) {
            $arr['device_id'] = $this->device_id;
        }
        if($this->device_ip) {
            $arr['device_ip'] = $this->device_ip;
        }
        if($this->interface_name) {
            $arr['interface_name'] = $this->interface_name;
        }
        if($this->interface_bind_key) {
            $arr['interface_bind_key'] = $this->interface_bind_key;
        }
        if($this->ont_ident) {
            $arr['ont_ident'] = $this->ont_ident;
        }
        if($this->mac_address) {
            $arr['mac_address'] = $this->mac_address;
        }
        if($this->only_active_mac) {
            $arr['only_active_mac'] = $this->only_active_mac;
        }
        return $arr;
    }
}