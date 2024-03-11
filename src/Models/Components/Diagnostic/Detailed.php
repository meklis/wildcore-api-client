<?php

namespace Meklis\WildcoreApiClient\Models\Components\Diagnostic;


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

    /**
     * @return \Meklis\WildcoreApiClient\Models\Components\Diagnostic\DetailedSwitch|null
     */
    public function getSwitch(): ?\Meklis\WildcoreApiClient\Models\Components\Diagnostic\DetailedSwitch
    {
        return $this->switch;
    }

    /**
     * @param \Meklis\WildcoreApiClient\Models\Components\Diagnostic\DetailedSwitch|null $switch
     * @return Detailed
     */
    public function setSwitch(?\Meklis\WildcoreApiClient\Models\Components\Diagnostic\DetailedSwitch $switch): Detailed
    {
        $this->switch = $switch;
        return $this;
    }

    /**
     * @return DetailedOlt|null
     */
    public function getOlt(): ?DetailedOlt
    {
        return $this->olt;
    }

    /**
     * @param DetailedOlt|null $olt
     * @return Detailed
     */
    public function setOlt(?DetailedOlt $olt): Detailed
    {
        $this->olt = $olt;
        return $this;
    }



}
