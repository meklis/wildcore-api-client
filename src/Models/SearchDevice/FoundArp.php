<?php

namespace Meklis\WildcoreApiClient\Models\SearchDevice;

use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Objects\DeviceIface;

class FoundArp
{
    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $mac;

    /**
     * @var string
     */
    protected $dinamic;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var int
     */
    protected $vlanId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var array
     */
    protected $extra;

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return FoundArp
     */
    public function setIp(string $ip): FoundArp
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }

    /**
     * @param string $mac
     * @return FoundArp
     */
    public function setMac(string $mac): FoundArp
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * @return string
     */
    public function getDinamic(): string
    {
        return $this->dinamic;
    }

    /**
     * @param string $dinamic
     * @return FoundArp
     */
    public function setDinamic(string $dinamic): FoundArp
    {
        $this->dinamic = $dinamic;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return FoundArp
     */
    public function setComment(string $comment): FoundArp
    {
        $this->comment = $comment;
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
     * @return FoundArp
     */
    public function setVlanId(int $vlanId): FoundArp
    {
        $this->vlanId = $vlanId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return FoundArp
     */
    public function setStatus(string $status): FoundArp
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtra(): array
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     * @return FoundArp
     */
    public function setExtra(array $extra): FoundArp
    {
        $this->extra = $extra;
        return $this;
    }


}
