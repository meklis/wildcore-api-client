<?php

namespace Meklis\WildcoreApiClient\Models\DeviceInterface;


class DeviceSwcoreIface
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
     * @var string
     */
    protected $ifaceName;

    /**
     * @var int | null
     */
    protected $parent;

    /**
     * @var string | null
     */
    protected $_technology;

    /**
     * @var int | null
     */
    protected $_frame;

    /**
     * @var int | null
     */
    protected $_slot;
    /**
     * @var int | null
     */
    protected $_port;
    /**
     * @var int | null
     */
    protected $_ont;

    /**
     * @var int | null
     */
    protected $_pon_max_ont_size;

    public function getIfaceName(): string
    {
        return $this->ifaceName;
    }

    public function setIfaceName(string $ifaceName): DeviceSwcoreIface
    {
        $this->ifaceName = $ifaceName;
        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(?int $parent): DeviceSwcoreIface
    {
        $this->parent = $parent;
        return $this;
    }

    public function getTechnology(): ?string
    {
        return $this->_technology;
    }

    public function setTechnology(?string $technology): DeviceSwcoreIface
    {
        $this->_technology = $technology;
        return $this;
    }

    public function getFrame(): ?int
    {
        return $this->_frame;
    }

    public function setFrame(?int $frame): DeviceSwcoreIface
    {
        $this->_frame = $frame;
        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->_slot;
    }

    public function setSlot(?int $slot): DeviceSwcoreIface
    {
        $this->_slot = $slot;
        return $this;
    }

    public function getPort(): ?int
    {
        return $this->_port;
    }

    public function setPort(?int $port): DeviceSwcoreIface
    {
        $this->_port = $port;
        return $this;
    }

    public function getOnt(): ?int
    {
        return $this->_ont;
    }

    public function setOnt(?int $ont): DeviceSwcoreIface
    {
        $this->_ont = $ont;
        return $this;
    }

    public function getPonMaxOntSize(): ?int
    {
        return $this->_pon_max_ont_size;
    }

    public function setPonMaxOntSize(?int $pon_max_ont_size): DeviceSwcoreIface
    {
        $this->_pon_max_ont_size = $pon_max_ont_size;
        return $this;
    }



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
     * @return DeviceSwcoreIface
     */
    public function setName(string $name): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setKey(string $key): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setType(string $type): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setXid(?int $xid): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setOnuNum(?int $onuNum): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setUni(?int $uni): DeviceSwcoreIface
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
     * @return DeviceSwcoreIface
     */
    public function setPontype(?string $pontype): DeviceSwcoreIface
    {
        $this->pontype = $pontype;
        return $this;
    }

}
