<?php


namespace Meklis\WildcoreApiClient\Models\Devices;


use InvalidArgumentException;
use Meklis\WildcoreApiClient\Models\Model;


class DeviceAccess extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $community;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

}