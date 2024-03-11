<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Vendor
{
    /**
     * @var string|null
     */
    protected $vendor;

    /**
     * @var string|null
     */
    protected $model;

    /**
     * @var string|null
     */
    protected $model_id;

    /**
     * @var string|null
     */
    protected $omcc_version;

    /**
     * @var VendorVersions[]|null
     */
    protected $versions;

    /**
     * @var string|null
     */
    protected $ver_software;

    /**
     * @var string|null
     */
    protected $ver_hardware;

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): Vendor
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): Vendor
    {
        $this->model = $model;
        return $this;
    }

    public function getModelId(): ?string
    {
        return $this->model_id;
    }

    public function setModelId(?string $model_id): Vendor
    {
        $this->model_id = $model_id;
        return $this;
    }

    public function getOmccVersion(): ?string
    {
        return $this->omcc_version;
    }

    public function setOmccVersion(?string $omcc_version): Vendor
    {
        $this->omcc_version = $omcc_version;
        return $this;
    }

    public function getVersions(): ?array
    {
        return $this->versions;
    }

    public function setVersions(?array $versions): Vendor
    {
        $this->versions = $versions;
        return $this;
    }

    public function getVerSoftware(): ?string
    {
        return $this->ver_software;
    }

    public function setVerSoftware(?string $ver_software): Vendor
    {
        $this->ver_software = $ver_software;
        return $this;
    }

    public function getVerHardware(): ?string
    {
        return $this->ver_hardware;
    }

    public function setVerHardware(?string $ver_hardware): Vendor
    {
        $this->ver_hardware = $ver_hardware;
        return $this;
    }

}