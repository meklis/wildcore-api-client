<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData;

class Meta
{
    protected ?string $time;

    protected ?string $source;

    protected ?bool $fromCache;

    protected ?string $hash;

    protected ?array $error;

    protected ?string $deviceIp;

    protected ?float $spent;

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function getFromCache(): ?bool
    {
        return $this->fromCache;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getDeviceIp(): ?string
    {
        return $this->deviceIp;
    }

    public function getSpent(): ?float
    {
        return $this->spent;
    }

    public function setTime(?string $time): self
    {
        $this->time = $time;
        return $this;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function setFromCache(?bool $fromCache): self
    {
        $this->fromCache = $fromCache;
        return $this;
    }

    public function setHash(?string $hash): self
    {
        $this->hash = $hash;
        return $this;
    }

    public function setError($error): self
    {
        $this->error = $error;
        return $this;
    }

    public function setDeviceIp(?string $deviceIp): self
    {
        $this->deviceIp = $deviceIp;
        return $this;
    }

    public function setSpent(?float $spent): self
    {
        $this->spent = $spent;
        return $this;
    }
}