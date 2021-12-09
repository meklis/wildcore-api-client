<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntInformation
{
    /**
     * @var string
     */
    protected $ident;
    /**
     * @var string
     */
    protected $identType;

    /**
     * @var int
     */
    protected $lastReg;

    /**
     * @var string
     */
    protected $lastRegSince;

    /**
     * @var string
     */
    protected $lastDownReason;

    /**
     * @var OntVendorInfo
     */
    protected $device;


    /**
     * @var OntOpticalInfo
     */
    protected $optical;

}
