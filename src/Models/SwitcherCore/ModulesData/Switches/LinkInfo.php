<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches;



class LinkInfo
{
    protected ?string $mediumType;

    protected ?string $type;

    protected ?string $lastChange;

    protected ?bool $connectorPresent;

    protected ?string $operStatus;

    protected ?string $description;

    protected ?string $adminState;

    protected ?string $nwayStatus;

    protected ?string $addressLearning;

    public function getMediumType(): ?string
    {
        return $this->mediumType;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getLastChange(): ?string
    {
        return $this->lastChange;
    }

    public function getConnectorPresent(): ?bool
    {
        return $this->connectorPresent;
    }

    public function getOperStatus(): ?string
    {
        return $this->operStatus;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAdminState(): ?string
    {
        return $this->adminState;
    }

    public function getNwayStatus(): ?string
    {
        return $this->nwayStatus;
    }

    public function getAddressLearning(): ?string
    {
        return $this->addressLearning;
    }



}