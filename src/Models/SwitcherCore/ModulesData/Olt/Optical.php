<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Optical
{
    protected ?float $oltRx;

    protected ?float $oltTx;

    protected ?float $rx;

    protected ?float $tx;

    protected ?float $voltage;

    protected ?float $temp;

    protected ?float $distance;

    public function getOltRx(): ?float
    {
        return $this->oltRx;
    }

    public function getOltTx()
    {
        return $this->oltTx;
    }

    public function getRx(): ?float
    {
        return $this->rx;
    }

    public function getTx(): ?float
    {
        return $this->tx;
    }

    public function getVoltage()
    {
        return $this->voltage;
    }

    public function getTemp()
    {
        return $this->temp;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setOltRx(?float $oltRx): self
    {
        $this->oltRx = $oltRx;
        return $this;
    }

    public function setOltTx($oltTx): self
    {
        $this->oltTx = $oltTx;
        return $this;
    }

    public function setRx(?float $rx): self
    {
        $this->rx = $rx;
        return $this;
    }

    public function setTx(?float $tx): self
    {
        $this->tx = $tx;
        return $this;
    }

    public function setVoltage($voltage): self
    {
        $this->voltage = $voltage;
        return $this;
    }

    public function setTemp($temp): self
    {
        $this->temp = $temp;
        return $this;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;
        return $this;
    }
}