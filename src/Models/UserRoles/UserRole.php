<?php

namespace Meklis\WildcoreApiClient\Models\UserRoles;

class UserRole
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var string;
     */
    protected $name;

    /**
     * @var bool
     */
    protected $display;

    /**
     * @var array
     */
    protected $permissions;

    /**
     * @var string
     */
    protected $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserRole
    {
        $this->id = $id;
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params): UserRole
    {
        $this->params = $params;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): UserRole
    {
        $this->name = $name;
        return $this;
    }

    public function isDisplay(): bool
    {
        return $this->display;
    }

    public function setDisplay(bool $display): UserRole
    {
        $this->display = $display;
        return $this;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): UserRole
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): UserRole
    {
        $this->description = $description;
        return $this;
    }





}