<?php

namespace Meklis\WildcoreApiClient\Models\Objects;


class DeviceIface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $_key;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $xid;

    /**
     * @var int|null
     */
    protected $onuNum;

    /**
     * @var int|null
     */
    protected $uni;

    /**
     * @var string|null
     */
    protected $pontype;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DeviceIface
     */
    public function setName(string $name): DeviceIface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->_key;
    }

    /**
     * @param string $key
     * @return DeviceIface
     */
    public function setKey(string $key): DeviceIface
    {
        $this->_key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return DeviceIface
     */
    public function setType(string $type): DeviceIface
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getXid(): ?int
    {
        return $this->xid;
    }

    /**
     * @param int|null $xid
     * @return DeviceIface
     */
    public function setXid(?int $xid): DeviceIface
    {
        $this->xid = $xid;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOnuNum(): ?int
    {
        return $this->onuNum;
    }

    /**
     * @param int|null $onuNum
     * @return DeviceIface
     */
    public function setOnuNum(?int $onuNum): DeviceIface
    {
        $this->onuNum = $onuNum;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUni(): ?int
    {
        return $this->uni;
    }

    /**
     * @param int|null $uni
     * @return DeviceIface
     */
    public function setUni(?int $uni): DeviceIface
    {
        $this->uni = $uni;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPontype(): ?string
    {
        return $this->pontype;
    }

    /**
     * @param string|null $pontype
     * @return DeviceIface
     */
    public function setPontype(?string $pontype): DeviceIface
    {
        $this->pontype = $pontype;
        return $this;
    }



}
