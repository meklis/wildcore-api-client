<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;


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

}
