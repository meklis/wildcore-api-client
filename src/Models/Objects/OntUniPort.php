<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntUniPort
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var string
     */
    protected $adminStatus;

    /**
     * @var int
     */
    protected $vlanId;

    /**
     * @var string
     */
    protected $vlanMode;

    /**
     * @var Counters
     */
    protected $counters;

    /**
     * @var Rmon
     */
    protected $rmonIn;

    /**
     * @var Rmon
     */
    protected $rmonOut;
}
