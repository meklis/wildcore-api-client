<?php


namespace Meklis\WildcoreApiClient\Models\DeviceAccess;


use Meklis\WildcoreApiClient\Models\Model;


class DeviceAccess extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array | null
     */
    protected $params = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $community;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return DeviceAccess
     */
    public function setId(int $id): DeviceAccess
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array | null
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return DeviceAccess
     */
    public function setParams(array $params): DeviceAccess
    {
        $this->params = $params;
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
     * @return DeviceAccess
     */
    public function setName(string $name): DeviceAccess
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommunity(): string
    {
        return $this->community;
    }

    /**
     * @param string $community
     * @return DeviceAccess
     */
    public function setCommunity(string $community): DeviceAccess
    {
        $this->community = $community;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return DeviceAccess
     */
    public function setLogin(string $login): DeviceAccess
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return DeviceAccess
     */
    public function setPassword(string $password): DeviceAccess
    {
        $this->password = $password;
        return $this;
    }



}
