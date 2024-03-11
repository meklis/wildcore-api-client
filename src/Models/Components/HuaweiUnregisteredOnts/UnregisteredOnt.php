<?php

namespace Meklis\WildcoreApiClient\Models\Components\HuaweiUnregisteredOnts;

use Meklis\WildcoreApiClient\Models\Components\Diagnostic\InterfaceDiagnostic;
use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceIface;
use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Devices\DeviceStorageInterface;

class UnregisteredOnt
{
    /**
     * @var string|null
     */
    protected $checkCode;

    /**
     * @var string|null
     */
    protected $customInfo;

    /**
     * @var Device
     */
    protected $device;
    /**
     * @var string|null
     */
    protected $equipmentId;
    /**
     * @var string|null
     */
    protected $fwVersion;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var string|null
     */
    protected $loid;

    /**
     * @var string|null
     */
    protected $macAddress;

    /**
     * @var string|null
     */
    protected $serial;
    /**
     * @var string|null
     */
    protected $model;
    /**
     * @var string|null
     */
    protected $password;
    /**
     * @var string|null
     */
    protected $regTime;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $version;

    public function getCheckCode(): ?string
    {
        return $this->checkCode;
    }

    public function setCheckCode(?string $checkCode): UnregisteredOnt
    {
        $this->checkCode = $checkCode;
        return $this;
    }

    public function getCustomInfo(): ?string
    {
        return $this->customInfo;
    }

    public function setCustomInfo(?string $customInfo): UnregisteredOnt
    {
        $this->customInfo = $customInfo;
        return $this;
    }

    public function getDevice(): Device
    {
        return $this->device;
    }

    public function setDevice(Device $device): UnregisteredOnt
    {
        $this->device = $device;
        return $this;
    }

    public function getEquipmentId(): ?string
    {
        return $this->equipmentId;
    }

    public function setEquipmentId(?string $equipmentId): UnregisteredOnt
    {
        $this->equipmentId = $equipmentId;
        return $this;
    }

    public function getFwVersion(): ?string
    {
        return $this->fwVersion;
    }

    public function setFwVersion(?string $fwVersion): UnregisteredOnt
    {
        $this->fwVersion = $fwVersion;
        return $this;
    }


    public function getLoid(): ?string
    {
        return $this->loid;
    }

    public function setLoid(?string $loid): UnregisteredOnt
    {
        $this->loid = $loid;
        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    public function setMacAddress(?string $macAddress): UnregisteredOnt
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(?string $serial): UnregisteredOnt
    {
        $this->serial = $serial;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): UnregisteredOnt
    {
        $this->model = $model;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): UnregisteredOnt
    {
        $this->password = $password;
        return $this;
    }

    public function getRegTime(): ?string
    {
        return $this->regTime;
    }

    public function setRegTime(?string $regTime): UnregisteredOnt
    {
        $this->regTime = $regTime;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): UnregisteredOnt
    {
        $this->type = $type;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): UnregisteredOnt
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdent()
    {
        return $this->serial ? $this->serial : $this->macAddress;
    }

    public function getInterface(): DeviceIface
    {
        return $this->interface;
    }

    public function setInterface(DeviceIface $interface): UnregisteredOnt
    {
        $this->interface = $interface;
        return $this;
    }


}