<?php

namespace Meklis\WildcoreApiClient\Models\DeviceGroups;

class DeviceGroup
{
    /**
     * @var string
     */
    protected $created_at;

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): DeviceGroup
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): DeviceGroup
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): DeviceGroup
    {
        $this->description = $description;
        return $this;
    }



}