<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class Counters
{

    /**
     * @var int
     */
    protected $inOctets;

    /**
     * @var int
     */
    protected $outOctets;

    /**
     * @var int
     */
    protected $inMulticastPkts;

    /**
     * @var int
     */
    protected $inBroadcastPkts;

    /**
     * @var int
     */
    protected $outMulticastPkts;

    /**
     * @var int
     */
    protected $outBroadcastPkts;

    /**
     * @return int
     */
    public function getInOctets(): int
    {
        return $this->inOctets;
    }

    /**
     * @param int $inOctets
     * @return Counters
     */
    public function setInOctets(int $inOctets): Counters
    {
        $this->inOctets = $inOctets;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutOctets(): int
    {
        return $this->outOctets;
    }

    /**
     * @param int $outOctets
     * @return Counters
     */
    public function setOutOctets(int $outOctets): Counters
    {
        $this->outOctets = $outOctets;
        return $this;
    }

    /**
     * @return int
     */
    public function getInMulticastPkts(): int
    {
        return $this->inMulticastPkts;
    }

    /**
     * @param int $inMulticastPkts
     * @return Counters
     */
    public function setInMulticastPkts(int $inMulticastPkts): Counters
    {
        $this->inMulticastPkts = $inMulticastPkts;
        return $this;
    }

    /**
     * @return int
     */
    public function getInBroadcastPkts(): int
    {
        return $this->inBroadcastPkts;
    }

    /**
     * @param int $inBroadcastPkts
     * @return Counters
     */
    public function setInBroadcastPkts(int $inBroadcastPkts): Counters
    {
        $this->inBroadcastPkts = $inBroadcastPkts;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutMulticastPkts(): int
    {
        return $this->outMulticastPkts;
    }

    /**
     * @param int $outMulticastPkts
     * @return Counters
     */
    public function setOutMulticastPkts(int $outMulticastPkts): Counters
    {
        $this->outMulticastPkts = $outMulticastPkts;
        return $this;
    }

    /**
     * @return int
     */
    public function getOutBroadcastPkts(): int
    {
        return $this->outBroadcastPkts;
    }

    /**
     * @param int $outBroadcastPkts
     * @return Counters
     */
    public function setOutBroadcastPkts(int $outBroadcastPkts): Counters
    {
        $this->outBroadcastPkts = $outBroadcastPkts;
        return $this;
    }


}
