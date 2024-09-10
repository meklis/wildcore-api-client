<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$device = $client->devices()->getByIp('10.23.123.148');

$interfaces = $client->deviceInterfaces()->getByDevice($device);


foreach ($interfaces as $interface) {
    if($interface->getType() !== 'ONU') continue;
    echo "Update interface description {$interface->getName()}\n";
    $device->getSwitcherCore()->call('ctrl_ont_descr', ['interface' => $interface->getBindKey(), 'description' => $interface->getName()]);
    sleep(1);
}