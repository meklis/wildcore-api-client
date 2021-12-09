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


}
