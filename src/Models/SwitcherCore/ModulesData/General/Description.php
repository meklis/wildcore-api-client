<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General;


class Description
{
    protected ?string $description;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function __toString()
    {
        return $this->description;
    }
}