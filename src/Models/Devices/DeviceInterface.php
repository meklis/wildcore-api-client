<?php


namespace Meklis\WildcoreApiClient\Models\Devices;


use Meklis\WildcoreApiClient\Models\Model;

class DeviceInterface extends Model
{

    const TYPE_ETHER = 'ETH';
    const TYPE_SFP = 'SFP';
    const TYPE_PON = 'PON';
    const TYPE_ONU = 'ONU';
    const TYPE_UNI = 'UNI';

    /**
     */
    protected $created_at;

    /**
     */
    protected $updated_at;

    /**
     * @var int
     */
    protected $device_id;

    /**
     * @var Device
     */
    protected ?Device $device = null;

    /**
     * @var int
     */
    protected $bind_key = -1;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var string
     */
    protected $billing_link = '';

    /**
     * @var string
     */
    protected $ip = '';

    /**
     * @var string
     */
    protected $agreement = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return DeviceInterface
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     * @return DeviceInterface
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeviceId(): int
    {
        return $this->device_id;
    }

    /**
     * @param int $device_id
     * @return DeviceInterface
     */
    public function setDeviceId(int $device_id): DeviceInterface
    {
        $this->device_id = $device_id;
        return $this;
    }

    /**
     * @return Device
     */
    public function getDevice(): ?Device
    {
        return $this->device;
    }

    /**
     * @param Device $device
     * @return DeviceInterface
     */
    public function setDevice(?Device $device): DeviceInterface
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return int
     */
    public function getBindKey(): int
    {
        return $this->bind_key;
    }

    /**
     * @param int $bind_key
     * @return DeviceInterface
     */
    public function setBindKey(int $bind_key): DeviceInterface
    {
        $this->bind_key = $bind_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DeviceInterface
     */
    public function setName(string $name): DeviceInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return DeviceInterface
     */
    public function setType(string $type): DeviceInterface
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return DeviceInterface
     */
    public function setParams(array $params): DeviceInterface
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingLink(): string
    {
        return $this->billing_link;
    }

    /**
     * @param string $billing_link
     * @return DeviceInterface
     */
    public function setBillingLink(string $billing_link): DeviceInterface
    {
        $this->billing_link = $billing_link;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return DeviceInterface
     */
    public function setIp(string $ip): DeviceInterface
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreement(): string
    {
        return $this->agreement;
    }

    /**
     * @param string $agreement
     * @return DeviceInterface
     */
    public function setAgreement(string $agreement): DeviceInterface
    {
        $this->agreement = $agreement;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return DeviceInterface
     */
    public function setDescription(string $description): DeviceInterface
    {
        $this->description = $description;
        return $this;
    }



}
