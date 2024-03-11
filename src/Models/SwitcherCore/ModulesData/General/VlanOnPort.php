<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General;

class VlanOnPort
{
    protected int $id;
    protected ?string $name;
    protected ?string $type;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }



}