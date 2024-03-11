<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General;

class Counters
{
    public ?int $inErrors;

    public ?int $outErrors;

    public ?int $inDiscards;

    public ?int $outDiscards;

    public ?int $inOctets;

    public ?int $outOctets;

    public ?int $inMulticastPkts;

    public ?int $outMulticastPkts;

    public ?int $inBroadcastPkts;

    public ?int $outBroadcastPkts;

    public function getInErrors(): ?int
    {
        return $this->inErrors;
    }

    public function setInErrors(?int $inErrors): Counters
    {
        $this->inErrors = $inErrors;
        return $this;
    }

    public function getOutErrors(): ?int
    {
        return $this->outErrors;
    }

    public function setOutErrors(?int $outErrors): Counters
    {
        $this->outErrors = $outErrors;
        return $this;
    }

    public function getInDiscards(): ?int
    {
        return $this->inDiscards;
    }

    public function setInDiscards(?int $inDiscards): Counters
    {
        $this->inDiscards = $inDiscards;
        return $this;
    }

    public function getOutDiscards(): ?int
    {
        return $this->outDiscards;
    }

    public function setOutDiscards(?int $outDiscards): Counters
    {
        $this->outDiscards = $outDiscards;
        return $this;
    }

    public function getInOctets(): ?int
    {
        return $this->inOctets;
    }

    public function setInOctets(?int $inOctets): Counters
    {
        $this->inOctets = $inOctets;
        return $this;
    }

    public function getOutOctets(): ?int
    {
        return $this->outOctets;
    }

    public function setOutOctets(?int $outOctets): Counters
    {
        $this->outOctets = $outOctets;
        return $this;
    }

    public function getInMulticastPkts(): ?int
    {
        return $this->inMulticastPkts;
    }

    public function setInMulticastPkts(?int $inMulticastPkts): Counters
    {
        $this->inMulticastPkts = $inMulticastPkts;
        return $this;
    }

    public function getOutMulticastPkts(): ?int
    {
        return $this->outMulticastPkts;
    }

    public function setOutMulticastPkts(?int $outMulticastPkts): Counters
    {
        $this->outMulticastPkts = $outMulticastPkts;
        return $this;
    }

    public function getInBroadcastPkts(): ?int
    {
        return $this->inBroadcastPkts;
    }

    public function setInBroadcastPkts(?int $inBroadcastPkts): Counters
    {
        $this->inBroadcastPkts = $inBroadcastPkts;
        return $this;
    }

    public function getOutBroadcastPkts(): ?int
    {
        return $this->outBroadcastPkts;
    }

    public function setOutBroadcastPkts(?int $outBroadcastPkts): Counters
    {
        $this->outBroadcastPkts = $outBroadcastPkts;
        return $this;
    }


}