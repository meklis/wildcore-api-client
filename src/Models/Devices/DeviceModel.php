<?php


namespace Meklis\WildcoreApiClient\Models\Devices;


use Meklis\WildcoreApiClient\Models\Model;



class DeviceModel extends Model
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
    protected $key;

    /**
     * @var array|null
     */
    protected $params;

    /**
     * @var string
     */
    protected $vendor;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $type;


    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var array|null
     */
    protected $collectors;

    /**
     * @var string
     */
    protected $icon;


}
