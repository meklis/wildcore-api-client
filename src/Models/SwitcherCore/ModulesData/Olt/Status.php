<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Status
{
    /**
     * @var string|null
     */
        protected $_onu_disabled;

    /**
     * @var string|null
     */
    protected $online;

    /**
     * @var string|null
     */
    protected $bind;

    /**
     * @var string|null
     */
    protected $admin;

    /**
     * @var string|null
     */
    protected $_conf_status;

    public function getOnuDisabled(): ?string
    {
        return $this->_onu_disabled;
    }

    public function setOnuDisabled(?string $onu_disabled): Status
    {
        $this->_onu_disabled = $onu_disabled;
        return $this;
    }

    public function getOnline(): ?string
    {
        return $this->online;
    }

    public function setOnline(?string $online): Status
    {
        $this->online = $online;
        return $this;
    }

    public function getBind(): ?string
    {
        return $this->bind;
    }

    public function setBind(?string $bind): Status
    {
        $this->bind = $bind;
        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(?string $admin): Status
    {
        $this->admin = $admin;
        return $this;
    }

    public function getConfStatus(): ?string
    {
        return $this->_conf_status;
    }

    public function setConfStatus(?string $conf_status): Status
    {
        $this->_conf_status = $conf_status;
        return $this;
    }


}