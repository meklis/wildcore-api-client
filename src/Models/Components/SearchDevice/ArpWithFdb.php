<?php

namespace Meklis\WildcoreApiClient\Models\Components\SearchDevice;

use Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchingModels\Arp;
use Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchingModels\Fdb;
use Meklis\WildcoreApiClient\Models\Model;

class ArpWithFdb extends Model
{
    /**
     * @var Arp
     */
    protected $arp;

    /**
     * @var Fdb
     */
    protected $fdb;

    /**
     * @return Arp
     */
    public function getArp(): Arp
    {
        return $this->arp;
    }

    /**
     * @param Arp $arp
     * @return ArpWithFdb
     */
    public function setArp(Arp $arp): ArpWithFdb
    {
        $this->arp = $arp;
        return $this;
    }

    /**
     * @return Fdb
     */
    public function getFdb(): Fdb
    {
        return $this->fdb;
    }

    /**
     * @param Fdb $fdb
     * @return ArpWithFdb
     */
    public function setFdb(Fdb $fdb): ArpWithFdb
    {
        $this->fdb = $fdb;
        return $this;
    }


}