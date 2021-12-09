<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;

class ArpPing
{
    /**
     * @var int
     */
    protected $seq;
    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $time;
    /**
     * @var int
     */
    protected $sent;
    /**
     * @var int
     */
    protected $received;
    /**
     * @var float
     */
    protected $packetLoss;
    /**
     * @var string
     */
    protected $minRtt;
    /**
     * @var string
     */
    protected $avgRtt;
    /**
     * @var string
     */
    protected $maxRtt;

    /**
     * @return int
     */
    public function getSeq(): int
    {
        return $this->seq;
    }

    /**
     * @param int $seq
     * @return ArpPing
     */
    public function setSeq(int $seq): ArpPing
    {
        $this->seq = $seq;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return ArpPing
     */
    public function setHost(string $host): ArpPing
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return ArpPing
     */
    public function setTime(string $time): ArpPing
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return int
     */
    public function getSent(): int
    {
        return $this->sent;
    }

    /**
     * @param int $sent
     * @return ArpPing
     */
    public function setSent(int $sent): ArpPing
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * @return int
     */
    public function getReceived(): int
    {
        return $this->received;
    }

    /**
     * @param int $received
     * @return ArpPing
     */
    public function setReceived(int $received): ArpPing
    {
        $this->received = $received;
        return $this;
    }

    /**
     * @return float
     */
    public function getPacketLoss(): float
    {
        return $this->packetLoss;
    }

    /**
     * @param float $packetLoss
     * @return ArpPing
     */
    public function setPacketLoss(float $packetLoss): ArpPing
    {
        $this->packetLoss = $packetLoss;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinRtt(): string
    {
        return $this->minRtt;
    }

    /**
     * @param string $minRtt
     * @return ArpPing
     */
    public function setMinRtt(string $minRtt): ArpPing
    {
        $this->minRtt = $minRtt;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvgRtt(): string
    {
        return $this->avgRtt;
    }

    /**
     * @param string $avgRtt
     * @return ArpPing
     */
    public function setAvgRtt(string $avgRtt): ArpPing
    {
        $this->avgRtt = $avgRtt;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxRtt(): string
    {
        return $this->maxRtt;
    }

    /**
     * @param string $maxRtt
     * @return ArpPing
     */
    public function setMaxRtt(string $maxRtt): ArpPing
    {
        $this->maxRtt = $maxRtt;
        return $this;
    }



}
