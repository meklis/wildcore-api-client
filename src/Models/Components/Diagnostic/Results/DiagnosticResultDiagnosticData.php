<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results;

use Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\FDB;
use Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Meta;

class DiagnosticResultDiagnosticData
{
    /**
     * @var DiagnosticData
     */
    protected $data;

    /**
     * @var Meta[]
     */
    protected $meta;

    public function getData(): DiagnosticData
    {
        return $this->data;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }



}