<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;

use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Diagnostic\Detailed;

use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;

class Diagnostic
{
    /**
     * @var Detailed
     */
    protected $detailed;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string[]
     */
    protected $statusFlags;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var Device
     */
    protected $device;
}
