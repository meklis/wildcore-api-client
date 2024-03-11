<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\DeviceStatus;

class DeviceStatusData
{
    protected ?string $descr;

    protected ?string $uptime;

    protected ?string $uptimeSec;

    protected ?string $contact;

    protected ?string $name;

    protected ?string $location;

    protected ?string $serialNum;

    protected ?string $macAddr;

    protected ?string $boardSoftwareVer;

    protected ?string $boardHardwareVer;

    protected ?DeviceStatusMeta $meta;


    public function getDescr(): ?string
    {
        return $this->descr;
    }

    public function getUptime(): ?string
    {
        return $this->uptime;
    }

    public function getUptimeSec(): ?string
    {
        return $this->uptimeSec;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function getSerialNum(): ?string
    {
        return $this->serialNum;
    }

    public function getMacAddr(): ?string
    {
        return $this->macAddr;
    }

    public function getBoardSoftwareVer(): ?string
    {
        return $this->boardSoftwareVer;
    }

    public function getBoardHardwareVer(): ?string
    {
        return $this->boardHardwareVer;
    }

    public function getMeta(): ?DeviceStatusMeta
    {
        return $this->meta;
    }

    public function setDescr(?string $descr): self
    {
        $this->descr = $descr;
        return $this;
    }

    public function setUptime(?string $uptime): self
    {
        $this->uptime = $uptime;
        return $this;
    }

    public function setUptimeSec(?string $uptimeSec): self
    {
        $this->uptimeSec = $uptimeSec;
        return $this;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function setSerialNum(?string $serialNum): self
    {
        $this->serialNum = $serialNum;
        return $this;
    }

    public function setMacAddr(?string $macAddr): self
    {
        $this->macAddr = $macAddr;
        return $this;
    }

    public function setBoardSoftwareVer(?string $boardSoftwareVer): self
    {
        $this->boardSoftwareVer = $boardSoftwareVer;
        return $this;
    }

    public function setBoardHardwareVer(?string $boardHardwareVer): self
    {
        $this->boardHardwareVer = $boardHardwareVer;
        return $this;
    }

    public function setMeta(?DeviceStatusMeta $meta): self
    {
        $this->meta = $meta;
        return $this;
    }
}
