<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$unregistered = $client->components()->huaweiOntsRegistration();

$list = $unregistered->getUnregistered(null, 'device');
echo "Found ".count($list). " unregistered ONTs\n";
foreach ($list as $l) {
    echo "Ident {$l->getIdent()} on device {$l->getDevice()->getIp()}::{$l->getInterface()->getName()}\n";
}

