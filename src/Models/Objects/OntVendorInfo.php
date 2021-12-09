<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntVendorInfo
{
    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $vendor;

    /**
     * @var string
     */
    protected $verHardware;

    /**
     * @var string
     */
    protected $verSoftware;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return OntVendorInfo
     */
    public function setModel(string $model): OntVendorInfo
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }

    /**
     * @param string $vendor
     * @return OntVendorInfo
     */
    public function setVendor(string $vendor): OntVendorInfo
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerHardware(): string
    {
        return $this->verHardware;
    }

    /**
     * @param string $verHardware
     * @return OntVendorInfo
     */
    public function setVerHardware(string $verHardware): OntVendorInfo
    {
        $this->verHardware = $verHardware;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerSoftware(): string
    {
        return $this->verSoftware;
    }

    /**
     * @param string $verSoftware
     * @return OntVendorInfo
     */
    public function setVerSoftware(string $verSoftware): OntVendorInfo
    {
        $this->verSoftware = $verSoftware;
        return $this;
    }


}
