<?php


namespace Meklis\WildcoreApiClient\Models\Components\SearchDevice\SearchingModels;

class Arp
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
     * @return Arp
     */
    public function setIp(string $ip): Arp
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
     * @return Arp
     */
    public function setMac(string $mac): Arp
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
     * @return Arp
     */
    public function setDinamic(string $dinamic): Arp
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
     * @return Arp
     */
    public function setComment(string $comment): Arp
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
     * @return Arp
     */
    public function setVlanId(int $vlanId): Arp
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
     * @return Arp
     */
    public function setStatus(string $status): Arp
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
     * @return Arp
     */
    public function setExtra(array $extra): Arp
    {
        $this->extra = $extra;
        return $this;
    }


}
