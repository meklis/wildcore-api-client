<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Reasons
{
    /**
     * @var array | null
     */
    public $historyTable;

    /**
     * @var string | null
     */
    public $lastReg;


    /**
     * @var string | null
     */
    public $lastRegSince;

    /**
     * @var string | null
     */
    public $lastDereg;

    /**
     * @var string | null
     */
    public $lastChange;

    /**
     * @var string | null
     */
    public $lastDeregSince;

    /**
     * @var string | null
     */
    public $lastDownReason;

    /**
     * @var string | null
     */
    public $lastChangeSince;

    public function getHistoryTable(): ?array
    {
        return $this->historyTable;
    }

    public function setHistoryTable(?array $historyTable): Reasons
    {
        $this->historyTable = $historyTable;
        return $this;
    }

    public function getLastReg(): ?string
    {
        return $this->lastReg;
    }

    public function setLastReg(?string $lastReg): Reasons
    {
        $this->lastReg = $lastReg;
        return $this;
    }

    public function getLastRegSince(): ?string
    {
        return $this->lastRegSince;
    }

    public function setLastRegSince(?string $lastRegSince): Reasons
    {
        $this->lastRegSince = $lastRegSince;
        return $this;
    }

    public function getLastDereg(): ?string
    {
        return $this->lastDereg;
    }

    public function setLastDereg(?string $lastDereg): Reasons
    {
        $this->lastDereg = $lastDereg;
        return $this;
    }

    public function getLastChange(): ?string
    {
        return $this->lastChange;
    }

    public function setLastChange(?string $lastChange): Reasons
    {
        $this->lastChange = $lastChange;
        return $this;
    }

    public function getLastDeregSince(): ?string
    {
        return $this->lastDeregSince;
    }

    public function setLastDeregSince(?string $lastDeregSince): Reasons
    {
        $this->lastDeregSince = $lastDeregSince;
        return $this;
    }

    public function getLastDownReason(): ?string
    {
        return $this->lastDownReason;
    }

    public function setLastDownReason(?string $lastDownReason): Reasons
    {
        $this->lastDownReason = $lastDownReason;
        return $this;
    }

    public function getLastChangeSince(): ?string
    {
        return $this->lastChangeSince;
    }

    public function setLastChangeSince(?string $lastChangeSince): Reasons
    {
        $this->lastChangeSince = $lastChangeSince;
        return $this;
    }


}