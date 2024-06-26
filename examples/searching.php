<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

//Search port over IP

$response = $client->components()->searchDevice()->searchArpAndFdbOverIP(
    ["10.15.1.2","10.16.1.2"], //Devices for search  on FDB
    ["185.253.216.129"], // Routers  for search ARP
    "185.253.216.135" // Searched IP-address
);
echo "Device IP: {$response->getFdb()->getDevice()->getIp()}\n";
echo "Device Port: {$response->getFdb()->getInterface()->getName()}\n";
echo "MAC address: {$response->getFdb()->getMac()}\n";
echo "Vlan ID: {$response->getFdb()->getVlanId()}\n";

$interface = $client->devices()->getByIp("10.15.1.2")->getSwcoreInterfaceByName("pon0/0/1:3");


print_r($interface);
