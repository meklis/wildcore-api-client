<?php

namespace Meklis\WildcoreApiClient\Models\User;


use Meklis\WildcoreApiClient\Models\DeviceGroups\DeviceGroup;
use Meklis\WildcoreApiClient\Models\UserRoles\UserRole;

class User
{

    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';

    const LANG_EN = 'en';
    const LANG_RU = 'ru';
    const LANG_UA = 'ua';


    /**
     * @morm.name=id
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    /**
     * @var  UserRole
     */
    protected $role;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var array
     */
    protected $last_activity;

    /**
     * @var
     */
    protected $status;

    /**
     * @var
     */
    protected $language;


    /**
     * @var array
     */
    protected $settings;

    /**
     * @var DeviceGroup[]
     */
    protected $deviceGroups = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getRole(): UserRole
    {
        return $this->role;
    }

    public function setRole(UserRole $role): User
    {
        $this->role = $role;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): User
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): User
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): User
    {
        $this->login = $login;
        return $this;
    }

    public function getLastActivity(): array
    {
        return $this->last_activity;
    }

    public function setLastActivity(array $last_activity): User
    {
        $this->last_activity = $last_activity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }

    public function setSettings(array $settings): User
    {
        $this->settings = $settings;
        return $this;
    }

    public function getDeviceGroups(): array
    {
        return $this->deviceGroups;
    }

    public function setDeviceGroups(array $deviceGroups): User
    {
        $this->deviceGroups = $deviceGroups;
        return $this;
    }




}