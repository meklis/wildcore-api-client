<?php

namespace Meklis\WildcoreApiClient\Models\Components;

use Meklis\WildcoreApiClient\Models\Components\HuaweiUnregisteredOnts\HuaweiUnregisteredOnts;
use Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchDevice;
use Meklis\WildcoreApiClient\Models\Components\ZteUnregisteredOnts\ZteUnregisteredOnts;
use Meklis\WildcoreApiClient\Models\Model;

class Components extends Model
{
    /**
     * @return HuaweiUnregisteredOnts
     */
    function huaweiOntsRegistration()
    {
        return new HuaweiUnregisteredOnts($this->httpClient);
    }

    /**
     * @return ZteUnregisteredOnts
     */
    function zteOntsRegistration()
    {
        return new ZteUnregisteredOnts($this->httpClient);
    }

    /**
     * @return Diagnostic\Diagnostics
     */
    function diagnostic()
    {
        return new Diagnostic\Diagnostics($this->httpClient);
    }

    public function searchDevice() {
        return new SearchDevice($this->httpClient);
    }

}