<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('9c6fff0b-a45e-4506-8fc5-f4b3108e82fd', 'http://192.168.100.5:8088/api/v1/');

$model = $client->deviceModels()->getById(48);
$access = $client->deviceAccesses()->getById(1);
$group = $client->deviceGroups()->getById(-1	);


$device = (new \Meklis\WildcoreApiClient\Models\Devices\Device())
    ->setModel($model)
    ->setAccess($access)
    ->setGroup($group);

$startIP = 167772161;
for($ip = 1; $ip < 2048; $ip++) {
    $devToAdd = clone $device;
    $created = $client->devices()->create(
        $devToAdd->setIp(long2ip($startIP + $ip))
        ->setName("Mock - " . long2ip($startIP + $ip))
    );
    echo "Device, IP={$created->getIp()} created with ID={$created->getId()}\n";
}

