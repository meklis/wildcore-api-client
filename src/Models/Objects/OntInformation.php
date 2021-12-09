<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntInformation
{
    /**
     * @var string
     */
    protected $ident;
    /**
     * @var string
     */
    protected $identType;

    /**
     * @var int
     */
    protected $lastReg;

    /**
     * @var string
     */
    protected $lastRegSince;

    /**
     * @var string
     */
    protected $lastDownReason;

    /**
     * @var OntVendorInfo
     */
    protected $device;


    /**
     * @var OntOpticalInfo
     */
    protected $optical;

    /**
     * @return string
     */
    public function getIdent(): string
    {
        return $this->ident;
    }

    /**
     * @param string $ident
     * @return OntInformation
     */
    public function setIdent(string $ident): OntInformation
    {
        $this->ident = $ident;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentType(): string
    {
        return $this->identType;
    }

    /**
     * @param string $identType
     * @return OntInformation
     */
    public function setIdentType(string $identType): OntInformation
    {
        $this->identType = $identType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastReg(): int
    {
        return $this->lastReg;
    }

    /**
     * @param int $lastReg
     * @return OntInformation
     */
    public function setLastReg(int $lastReg): OntInformation
    {
        $this->lastReg = $lastReg;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastRegSince(): string
    {
        return $this->lastRegSince;
    }

    /**
     * @param string $lastRegSince
     * @return OntInformation
     */
    public function setLastRegSince(string $lastRegSince): OntInformation
    {
        $this->lastRegSince = $lastRegSince;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastDownReason(): string
    {
        return $this->lastDownReason;
    }

    /**
     * @param string $lastDownReason
     * @return OntInformation
     */
    public function setLastDownReason(string $lastDownReason): OntInformation
    {
        $this->lastDownReason = $lastDownReason;
        return $this;
    }

    /**
     * @return OntVendorInfo
     */
    public function getDevice(): OntVendorInfo
    {
        return $this->device;
    }

    /**
     * @param OntVendorInfo $device
     * @return OntInformation
     */
    public function setDevice(OntVendorInfo $device): OntInformation
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return OntOpticalInfo
     */
    public function getOptical(): OntOpticalInfo
    {
        return $this->optical;
    }

    /**
     * @param OntOpticalInfo $optical
     * @return OntInformation
     */
    public function setOptical(OntOpticalInfo $optical): OntInformation
    {
        $this->optical = $optical;
        return $this;
    }


}
