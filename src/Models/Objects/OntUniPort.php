<?php

namespace Meklis\WildcoreApiClient\Models\Objects;

class OntUniPort
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var DeviceIface
     */
    protected $interface;

    /**
     * @var string
     */
    protected $adminStatus;

    /**
     * @var int
     */
    protected $vlanId;

    /**
     * @var string
     */
    protected $vlanMode;

    /**
     * @var Counters
     */
    protected $counters;

    /**
     * @var Rmon
     */
    protected $rmonIn;

    /**
     * @var Rmon
     */
    protected $rmonOut;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return OntUniPort
     */
    public function setStatus(string $status): OntUniPort
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return DeviceIface
     */
    public function getInterface(): DeviceIface
    {
        return $this->interface;
    }

    /**
     * @param DeviceIface $interface
     * @return OntUniPort
     */
    public function setInterface(DeviceIface $interface): OntUniPort
    {
        $this->interface = $interface;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminStatus(): string
    {
        return $this->adminStatus;
    }

    /**
     * @param string $adminStatus
     * @return OntUniPort
     */
    public function setAdminStatus(string $adminStatus): OntUniPort
    {
        $this->adminStatus = $adminStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }

    /**
     * @param int $vlanId
     * @return OntUniPort
     */
    public function setVlanId(int $vlanId): OntUniPort
    {
        $this->vlanId = $vlanId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVlanMode(): string
    {
        return $this->vlanMode;
    }

    /**
     * @param string $vlanMode
     * @return OntUniPort
     */
    public function setVlanMode(string $vlanMode): OntUniPort
    {
        $this->vlanMode = $vlanMode;
        return $this;
    }

    /**
     * @return Counters
     */
    public function getCounters(): Counters
    {
        return $this->counters;
    }

    /**
     * @param Counters $counters
     * @return OntUniPort
     */
    public function setCounters(Counters $counters): OntUniPort
    {
        $this->counters = $counters;
        return $this;
    }

    /**
     * @return Rmon
     */
    public function getRmonIn(): Rmon
    {
        return $this->rmonIn;
    }

    /**
     * @param Rmon $rmonIn
     * @return OntUniPort
     */
    public function setRmonIn(Rmon $rmonIn): OntUniPort
    {
        $this->rmonIn = $rmonIn;
        return $this;
    }

    /**
     * @return Rmon
     */
    public function getRmonOut(): Rmon
    {
        return $this->rmonOut;
    }

    /**
     * @param Rmon $rmonOut
     * @return OntUniPort
     */
    public function setRmonOut(Rmon $rmonOut): OntUniPort
    {
        $this->rmonOut = $rmonOut;
        return $this;
    }


}
