<?php


namespace Meklis\WildcoreApiClient\Models\Devices;




use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\DeviceAccess\DeviceAccess;
use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface;
use Meklis\WildcoreApiClient\Models\DeviceModels\DeviceModel;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\SwitcherCore\SwitcherCore;

class Device extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $ip = '0.0.0.0';

    /**
     * @var string
     */
    protected $location = '';


    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';


    protected ?DeviceModel $model;

    protected ?DeviceAccess $access;

    /**
     * @var array|null
     */
    protected $params;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var false|string
     */
    protected $created_at;


    /**
     * @var string
     */
    protected $mac;

    /**
     * @var string
     */
    protected $serial;

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return Device
     */
    public function setIp(string $ip): Device
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return Device
     */
    public function setLocation(string $location): Device
    {
        $this->location = $location;
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
     * @return Device
     */
    public function setName(string $name): Device
    {
        $this->name = $name;
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
     * @return Device
     */
    public function setDescription(string $description): Device
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return DeviceModel|null
     */
    public function getModel(): ?DeviceModel
    {
        return $this->model;
    }

    /**
     * @param DeviceModel|null $model
     * @return Device
     */
    public function setModel(?DeviceModel $model): Device
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return DeviceAccess|null
     */
    public function getAccess(): ?DeviceAccess
    {
        return $this->access;
    }

    /**
     * @param DeviceAccess|null $access
     * @return Device
     */
    public function setAccess(?DeviceAccess $access): Device
    {
        $this->access = $access;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * @param array|null $params
     * @return Device
     */
    public function setParams(?array $params): Device
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return Device
     */
    public function setUpdatedAt(string $updated_at): Device
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return false|string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param false|string $created_at
     * @return Device
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }

    /**
     * @param string $mac
     * @return Device
     */
    public function setMac(string $mac): Device
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }

    /**
     * @param string $serial
     * @return Device
     */
    public function setSerial(string $serial): Device
    {
        $this->serial = $serial;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Device
     */
    public function setId(int $id): Device
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @param $interfaceName
     * @param $from
     * @return DeviceSwcoreIface
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function getSwcoreInterfaceByName($interfaceName, $from = 'cache') {
        $data = json_decode($this->httpClient->post("switcher-core/{$from}/parse_interface/{$this->getId()}", [
            RequestOptions::JSON => [
                'interface' => $interfaceName,
            ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, DeviceSwcoreIface::class);
    }

    /**
     * @return SwitcherCore
     */
    function getSwitcherCore() {
        return new SwitcherCore($this, $this->httpClient,  false);
    }
}
