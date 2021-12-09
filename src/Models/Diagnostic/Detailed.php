<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;

use Meklis\WildcoreApiClient\Models\Diagnostic\DetailedSwitch;


class Detailed
{
    /**
     * @var DetailedSwitch | null
     */
    protected ?DetailedSwitch $switch;

    /**
     * @var DetailedOlt | null
     */
    protected ?DetailedOlt $olt;

}
