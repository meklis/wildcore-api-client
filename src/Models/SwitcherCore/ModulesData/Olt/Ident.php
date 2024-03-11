<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Ident
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $type;

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Ident
    {
        $this->value = $value;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Ident
    {
        $this->type = $type;
        return $this;
    }

}