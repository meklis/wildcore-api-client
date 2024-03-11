<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\DeviceStatus;


class DeviceStatusMeta
{
    protected ?string $key;

    protected ?string $name;

    protected ?array $detect;

    protected ?int $ports;

    protected ?array $extra;

    /** @var string[]|null */
    protected ?array $modules;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDetect(): ?array
    {
        return $this->detect;
    }

    public function getPorts(): ?int
    {
        return $this->ports;
    }

    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * @return string[]|null
     */
    public function getModules(): ?array
    {
        return $this->modules;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setDetect(?array $detect): self
    {
        $this->detect = $detect;
        return $this;
    }

    public function setPorts(?int $ports): self
    {
        $this->ports = $ports;
        return $this;
    }

    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @param string[]|null $modules
     */
    public function setModules(?array $modules): self
    {
        $this->modules = $modules;
        return $this;
    }
}
