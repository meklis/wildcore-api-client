<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class Vlan
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
    protected $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Vlan
     */
    public function setId(int $id): Vlan
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
     * @return Vlan
     */
    public function setName(string $name): Vlan
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
     * @return Vlan
     */
    public function setType(string $type): Vlan
    {
        $this->type = $type;
        return $this;
    }



}
