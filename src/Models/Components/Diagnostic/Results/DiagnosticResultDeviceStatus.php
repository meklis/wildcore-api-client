<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results;

use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\DeviceStatus\DeviceStatusData;

class DiagnosticResultDeviceStatus
{
    /**
     * @var DeviceStatusData
     */
    protected $data;

    /**
     * @var string | null
     */
    protected $error;

    public function getData(): DeviceStatusData
    {
        return $this->data;
    }

    public function getError(): ?string
    {
        return $this->error;
    }



}