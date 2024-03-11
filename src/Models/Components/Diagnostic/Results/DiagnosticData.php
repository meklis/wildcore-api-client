<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results;

use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\Counters;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\Description;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\FDB;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\VlanOnPort;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Ident;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Optical;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Reasons;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Status;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Uni;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Vendor;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches\Errors;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches\LinkInfo;

class DiagnosticData
{
    /**
     * @var DeviceSwcoreIface
     */
    protected $interface;

    /**
     * @var FDB[]|null
     */
    protected $fdb;

    /**
     * @var LinkInfo[]|null
     */
    protected $linkInfo;

    /**
     * @var Errors|null
     */
    protected $errors;

    /**
     * @var Counters|null
     */
    protected $counters;

    /**
     * @strict no
     * @var  Description | null
     */
    protected $description;

    /**
     * @var Vendor | null
     */
    protected $vendor;

    /**
     * @var Status | null
     */
    protected $status;

    /**
     * @var Uni[] | null
     */
    protected $uni;

    /**
     * @var string | null
     */
    protected $name;

    /**
     * @var Ident | null
     */
    protected $ident;


    /**
     * @var Reasons | null
     */
    protected $reasons;

    /**
     * @var Optical | null
     */
    protected $optical;

    /**
     * @var array | null
     */
    protected $cable_diag;

    /**
     * @var VlanOnPort[] | null
     */
    protected $vlans;

    public function getVlans(): ?array
    {
        return $this->vlans;
    }



    public function getInterface(): DeviceSwcoreIface
    {
        return $this->interface;
    }

    public function getFdb(): ?array
    {
        return $this->fdb;
    }

    public function getLinkInfo()
    {
        return $this->linkInfo;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function getCounters(): ?Counters
    {
        return $this->counters;
    }

    /**
     * @return Description|string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getVendor(): ?Vendor
    {
        return $this->vendor;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function getUni(): ?array
    {
        return $this->uni;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getIdent(): ?Ident
    {
        return $this->ident;
    }

    public function getReasons(): ?Reasons
    {
        return $this->reasons;
    }

    public function getOptical(): ?Optical
    {
        return $this->optical;
    }

    public function getCableDiag(): ?array
    {
        return $this->cable_diag;
    }

    public function setCableDiag(?array $cable_diag): DiagnosticData
    {
        $this->cable_diag = $cable_diag;
        return $this;
    }




}