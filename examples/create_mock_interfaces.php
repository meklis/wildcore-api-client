<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('9c6fff0b-a45e-4506-8fc5-f4b3108e82fd', 'http://192.168.100.5:8088/api/v1/');

$devices = $client->devices()->list();



foreach ($devices as $device) {
    for($num = 1; $num <= 56; $num++) {
        $iface = $client->deviceInterfaces()->create(
            (new \Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceStorageInterface())
                ->setName("Port {$num}")
            ->setBindKey($num)
            ->setType("ETH")
            ->setDevice($device)
            ->setStatus($num % 2 == 0 ? "Up" : "Down")
        );
        echo "Created interface '{$iface->getName()}' for device {$iface->getDevice()->getIp()} with ID={$iface->getId()}\n";
    }
}