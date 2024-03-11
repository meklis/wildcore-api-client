<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class VendorVersions
{
    /**
     * @var int|null
     */
    protected $image_num;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var boolean|false
     */
    protected $active;
    /**
     * @var boolean|false
     */
    protected $valid;

    /**
     * @var boolean|false
     */
    protected $commited;

    public function getImageNum(): ?int
    {
        return $this->image_num;
    }

    public function setImageNum(?int $image_num): VendorVersions
    {
        $this->image_num = $image_num;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): VendorVersions
    {
        $this->version = $version;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): VendorVersions
    {
        $this->active = $active;
        return $this;
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): VendorVersions
    {
        $this->valid = $valid;
        return $this;
    }

    public function isCommited(): bool
    {
        return $this->commited;
    }

    public function setCommited(bool $commited): VendorVersions
    {
        $this->commited = $commited;
        return $this;
    }


}