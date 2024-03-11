<?php


namespace Meklis\WildcoreApiClient\Models\Devices;


use Meklis\WildcoreApiClient\Models\Model;



class DeviceModel extends Model
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var array|null
     */
    protected $params;

    /**
     * @var string
     */
    protected $vendor;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $type;


    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var array|null
     */
    protected $collectors;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return DeviceModel
     */
    public function setId(int $id): DeviceModel
    {
        $this->id = $id;
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
     * @return DeviceModel
     */
    public function setName(string $name): DeviceModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return DeviceModel
     */
    public function setKey(string $key): DeviceModel
    {
        $this->key = $key;
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
     * @return DeviceModel
     */
    public function setParams(?array $params): DeviceModel
    {
        $this->params = $params;
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
     * @return DeviceModel
     */
    public function setVendor(string $vendor): DeviceModel
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return DeviceModel
     */
    public function setModel(string $model): DeviceModel
    {
        $this->model = $model;
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
     * @return DeviceModel
     */
    public function setType(string $type): DeviceModel
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getController(): ?string
    {
        return $this->controller;
    }

    /**
     * @param string|null $controller
     * @return DeviceModel
     */
    public function setController(?string $controller): DeviceModel
    {
        $this->controller = $controller;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCollectors(): ?array
    {
        return $this->collectors;
    }

    /**
     * @param array|null $collectors
     * @return DeviceModel
     */
    public function setCollectors(?array $collectors): DeviceModel
    {
        $this->collectors = $collectors;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return DeviceModel
     */
    public function setIcon(string $icon): DeviceModel
    {
        $this->icon = $icon;
        return $this;
    }



}
