<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches;

class Errors
{
    protected ?string $inErrors;

    protected ?string $outErrors;

    protected ?string $inDiscards;

    protected ?string $outDiscards;

    public function getInErrors(): ?string
    {
        return $this->inErrors;
    }

    public function getOutErrors(): ?string
    {
        return $this->outErrors;
    }

    public function getInDiscards(): ?string
    {
        return $this->inDiscards;
    }

    public function getOutDiscards(): ?string
    {
        return $this->outDiscards;
    }

    public function setInErrors(?string $inErrors): self
    {
        $this->inErrors = $inErrors;
        return $this;
    }

    public function setOutErrors(?string $outErrors): self
    {
        $this->outErrors = $outErrors;
        return $this;
    }

    public function setInDiscards(?string $inDiscards): self
    {
        $this->inDiscards = $inDiscards;
        return $this;
    }

    public function setOutDiscards(?string $outDiscards): self
    {
        $this->outDiscards = $outDiscards;
        return $this;
    }
}
