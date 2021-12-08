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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}