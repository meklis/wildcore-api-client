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
}
