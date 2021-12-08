<?php


namespace Meklis\WildcoreApiClient\Models\Devices;




use Meklis\WildcoreApiClient\Models\Model;

class Device extends Model
{
    /**
     * @var string
     */
    protected $ip = '0.0.0.0';

    /**
     * @var string
     */
    protected $location = '';


    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var DeviceModel|null
     */
    protected ?DeviceModel $model;

    /**
     * @var DeviceAccess|null
     */
    protected ?DeviceAccess $access;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var string
     */
    protected $updated_at;

    /**
     * @var false|string
     */
    protected $created_at;


    /**
     * @var string
     */
    protected $mac;

    /**
     * @var string
     */
    protected $serial;

}