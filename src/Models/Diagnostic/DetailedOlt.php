<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;


use Meklis\WildcoreApiClient\Models\Objects\Fdb;
use Meklis\WildcoreApiClient\Models\Objects\OntInformation;
use Meklis\WildcoreApiClient\Models\Objects\OntUniPort;

class DetailedOlt
{
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string
     */
    protected $adminState;

    /**
     * @var string
     */
    protected $operateStatus;

    /**
     * @var Fdb[]|null
     */
    protected $fdb;

    /**
     * @var OntInformation
     */
    protected $ontInformation;

    /**
     * @var OntUniPort
     */
    protected $uniPorts;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return DetailedOlt
     */
    public function setStatus(?string $status): DetailedOlt
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminState(): string
    {
        return $this->adminState;
    }

    /**
     * @param string $adminState
     * @return DetailedOlt
     */
    public function setAdminState(string $adminState): DetailedOlt
    {
        $this->adminState = $adminState;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperateStatus(): string
    {
        return $this->operateStatus;
    }

    /**
     * @param string $operateStatus
     * @return DetailedOlt
     */
    public function setOperateStatus(string $operateStatus): DetailedOlt
    {
        $this->operateStatus = $operateStatus;
        return $this;
    }

    /**
     * @return Fdb[]|null
     */
    public function getFdb(): ?array
    {
        return $this->fdb;
    }

    /**
     * @param Fdb[]|null $fdb
     * @return DetailedOlt
     */
    public function setFdb(?array $fdb): DetailedOlt
    {
        $this->fdb = $fdb;
        return $this;
    }

    /**
     * @return OntInformation
     */
    public function getOntInformation(): OntInformation
    {
        return $this->ontInformation;
    }

    /**
     * @param OntInformation $ontInformation
     * @return DetailedOlt
     */
    public function setOntInformation(OntInformation $ontInformation): DetailedOlt
    {
        $this->ontInformation = $ontInformation;
        return $this;
    }

    /**
     * @return OntUniPort
     */
    public function getUniPorts(): OntUniPort
    {
        return $this->uniPorts;
    }

    /**
     * @param OntUniPort $uniPorts
     * @return DetailedOlt
     */
    public function setUniPorts(OntUniPort $uniPorts): DetailedOlt
    {
        $this->uniPorts = $uniPorts;
        return $this;
    }


}
