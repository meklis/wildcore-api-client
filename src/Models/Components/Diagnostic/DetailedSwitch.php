<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic;


use Meklis\WildcoreApiClient\Models\Objects\CablePairDiag;
use Meklis\WildcoreApiClient\Models\Objects\Counters;
use Meklis\WildcoreApiClient\Models\Objects\Errors;
use Meklis\WildcoreApiClient\Models\Objects\Fdb;
use Meklis\WildcoreApiClient\Models\Objects\Rmon;
use Meklis\WildcoreApiClient\Models\Objects\Vlan;

class DetailedSwitch
{
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $adminState;
    /**
     * @var string|null
     */
    protected $operateStatus;
    /**
     * @var Fdb[]|null
     */
    protected $fdb;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var Vlan[]|null
     */
    protected $vlans;

    /**
     * @var CablePairDiag[]|null
     */
    protected $cableDiagnostic;


    /**
     * @var Counters
     */
    protected $counters;

    /**
     * @var Errors
     */
    protected $errors;

    /**
     * @var Rmon
     */
    protected $rmon;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return DetailedSwitch
     */
    public function setStatus(?string $status): DetailedSwitch
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminState(): ?string
    {
        return $this->adminState;
    }

    /**
     * @param string|null $adminState
     * @return DetailedSwitch
     */
    public function setAdminState(?string $adminState): DetailedSwitch
    {
        $this->adminState = $adminState;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperateStatus(): ?string
    {
        return $this->operateStatus;
    }

    /**
     * @param string|null $operateStatus
     * @return DetailedSwitch
     */
    public function setOperateStatus(?string $operateStatus): DetailedSwitch
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
     * @return DetailedSwitch
     */
    public function setFdb(?array $fdb): DetailedSwitch
    {
        $this->fdb = $fdb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return DetailedSwitch
     */
    public function setDescription(?string $description): DetailedSwitch
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Vlan[]|null
     */
    public function getVlans(): ?array
    {
        return $this->vlans;
    }

    /**
     * @param Vlan[]|null $vlans
     * @return DetailedSwitch
     */
    public function setVlans(?array $vlans): DetailedSwitch
    {
        $this->vlans = $vlans;
        return $this;
    }

    /**
     * @return CablePairDiag[]|null
     */
    public function getCableDiagnostic(): ?array
    {
        return $this->cableDiagnostic;
    }

    /**
     * @param CablePairDiag[]|null $cableDiagnostic
     * @return DetailedSwitch
     */
    public function setCableDiagnostic(?array $cableDiagnostic): DetailedSwitch
    {
        $this->cableDiagnostic = $cableDiagnostic;
        return $this;
    }

    /**
     * @return Counters
     */
    public function getCounters(): Counters
    {
        return $this->counters;
    }

    /**
     * @param Counters $counters
     * @return DetailedSwitch
     */
    public function setCounters(Counters $counters): DetailedSwitch
    {
        $this->counters = $counters;
        return $this;
    }

    /**
     * @return Errors
     */
    public function getErrors(): Errors
    {
        return $this->errors;
    }

    /**
     * @param Errors $errors
     * @return DetailedSwitch
     */
    public function setErrors(Errors $errors): DetailedSwitch
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return Rmon
     */
    public function getRmon(): Rmon
    {
        return $this->rmon;
    }

    /**
     * @param Rmon $rmon
     * @return DetailedSwitch
     */
    public function setRmon(Rmon $rmon): DetailedSwitch
    {
        $this->rmon = $rmon;
        return $this;
    }



}
