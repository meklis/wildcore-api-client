<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class Fdb
{
    /**
     * @var int
     */
    protected $vlanId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $macAddress;

    /**
     * @var DeviceIface|null
     */
    protected $interface;
}
