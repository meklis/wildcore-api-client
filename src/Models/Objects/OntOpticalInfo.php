<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntOpticalInfo
{
    /**
     * @var float
     */
    protected $rx;

    /**
     * @var float
     */
    protected $tx;

    /**
     * @var float
     */
    protected $voltage;

    /**
     * @var float
     */
    protected $temp;

    /**
     * @var int
     */
    protected $distance;

    /**
     * @return float
     */
    public function getRx(): float
    {
        return $this->rx;
    }

    /**
     * @param float $rx
     * @return OntOpticalInfo
     */
    public function setRx(float $rx): OntOpticalInfo
    {
        $this->rx = $rx;
        return $this;
    }

    /**
     * @return float
     */
    public function getTx(): float
    {
        return $this->tx;
    }

    /**
     * @param float $tx
     * @return OntOpticalInfo
     */
    public function setTx(float $tx): OntOpticalInfo
    {
        $this->tx = $tx;
        return $this;
    }

    /**
     * @return float
     */
    public function getVoltage(): float
    {
        return $this->voltage;
    }

    /**
     * @param float $voltage
     * @return OntOpticalInfo
     */
    public function setVoltage(float $voltage): OntOpticalInfo
    {
        $this->voltage = $voltage;
        return $this;
    }

    /**
     * @return float
     */
    public function getTemp(): float
    {
        return $this->temp;
    }

    /**
     * @param float $temp
     * @return OntOpticalInfo
     */
    public function setTemp(float $temp): OntOpticalInfo
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     * @return OntOpticalInfo
     */
    public function setDistance(int $distance): OntOpticalInfo
    {
        $this->distance = $distance;
        return $this;
    }


}
