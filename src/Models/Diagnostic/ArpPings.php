<?php

namespace Meklis\WildcoreApiClient\Models\Diagnostic;

use GuzzleHttp\Client;
use Meklis\WildcoreApiClient\Models\Model;

class ArpPings extends Model
{
    protected $pings;

    function __construct(Client $httpClient = null, $pings = [], $strictMapping = true)
    {
        parent::__construct($httpClient, $strictMapping);

        foreach ($pings as $ping) {
            $this->pings[] = $this->mapper->map($ping, ArpPing::class);
        }
    }

    /**
     * @return mixed
     */
    public function getPings()
    {
        return $this->pings;
    }

    /**
     * @param mixed $pings
     * @return ArpPings
     */
    public function setPings($pings)
    {
        $this->pings = $pings;
        return $this;
    }



}
