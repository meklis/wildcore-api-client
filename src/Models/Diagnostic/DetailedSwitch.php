<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;


use Meklis\WildcoreApiClient\Models\Objects\Counters;
use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;
use Meklis\WildcoreApiClient\Models\Objects\Errors;
use Meklis\WildcoreApiClient\Models\Objects\Rmon;

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
     * @var array
     */
    protected $fdb;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var array
     */
    protected $vlans;

    /**
     * @var array
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