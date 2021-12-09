<?php

namespace Meklis\WildcoreApiClient\Models\Objects;



class Rmon
{
    /**
     * @var int
     */
    protected $crcAlignErrors;
    /**
     * @var int
     */
    protected $undersizePkts;
    /**
     * @var int
     */
    protected $fragments;
    /**
     * @var int
     */
    protected $jabber;
    /**
     * @var int
     */
    protected $collisions;
    /**
     * @var int
     */
    protected $dropEvents;

    /**
     * @return int
     */
    public function getCrcAlignErrors(): int
    {
        return $this->crcAlignErrors;
    }

    /**
     * @param int $crcAlignErrors
     * @return Rmon
     */
    public function setCrcAlignErrors(int $crcAlignErrors): Rmon
    {
        $this->crcAlignErrors = $crcAlignErrors;
        return $this;
    }

    /**
     * @return int
     */
    public function getUndersizePkts(): int
    {
        return $this->undersizePkts;
    }

    /**
     * @param int $undersizePkts
     * @return Rmon
     */
    public function setUndersizePkts(int $undersizePkts): Rmon
    {
        $this->undersizePkts = $undersizePkts;
        return $this;
    }

    /**
     * @return int
     */
    public function getFragments(): int
    {
        return $this->fragments;
    }

    /**
     * @param int $fragments
     * @return Rmon
     */
    public function setFragments(int $fragments): Rmon
    {
        $this->fragments = $fragments;
        return $this;
    }

    /**
     * @return int
     */
    public function getJabber(): int
    {
        return $this->jabber;
    }

    /**
     * @param int $jabber
     * @return Rmon
     */
    public function setJabber(int $jabber): Rmon
    {
        $this->jabber = $jabber;
        return $this;
    }

    /**
     * @return int
     */
    public function getCollisions(): int
    {
        return $this->collisions;
    }

    /**
     * @param int $collisions
     * @return Rmon
     */
    public function setCollisions(int $collisions): Rmon
    {
        $this->collisions = $collisions;
        return $this;
    }

    /**
     * @return int
     */
    public function getDropEvents(): int
    {
        return $this->dropEvents;
    }

    /**
     * @param int $dropEvents
     * @return Rmon
     */
    public function setDropEvents(int $dropEvents): Rmon
    {
        $this->dropEvents = $dropEvents;
        return $this;
    }


}
