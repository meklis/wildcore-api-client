<?php

require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');


$response = $client->searchDevice()->searchArpAndFdbOverIP(
    ["10.15.1.2","10.16.1.2"],
    ["185.253.216.129"],
    "185.253.216.135"
);


print_r($response->getAsArray());
