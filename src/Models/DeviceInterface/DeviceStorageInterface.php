<?php


namespace Meklis\WildcoreApiClient\Models\DeviceInterface;


use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;

class DeviceStorageInterface extends Model
{

    const TYPE_ETHER = 'ETH';
    const TYPE_SFP = 'SFP';
    const TYPE_PON = 'PON';
    const TYPE_ONU = 'ONU';
    const TYPE_UNI = 'UNI';

    const STATUS_UP = 'Up';
    const STATUS_Down = 'Down';
    const STATUS_ONLINE = 'Online';
    const STATUS_OFFLINE = 'Offline';
    const STATUS_POWER_OFF = 'PowerOff';
    const STATUS_LOS = 'LOS';

    const url = 'device-interface';


    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $created_at;

    /**
     * @var string | null
     */
    protected $status;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var int
     */
    protected $device_id;

    /**
     * @var Device|null
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
     * @var string
     */
    protected $comment = '';

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return DeviceStorageInterface
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
     * @return DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setDeviceId(int $device_id): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setDevice(?Device $device): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setBindKey(int $bind_key): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setName(string $name): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setType(string $type): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setParams(array $params): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setBillingLink(string $billing_link): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setIp(string $ip): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setAgreement(string $agreement): DeviceStorageInterface
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
     * @return DeviceStorageInterface
     */
    public function setDescription(string $description): DeviceStorageInterface
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return DeviceStorageInterface
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getStatus(): string | null
    {
        return $this->status;
    }

    public function setStatus(string $status): DeviceStorageInterface
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

}
