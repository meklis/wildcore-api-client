<?php

require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$response = $client->diagnostics()->arpPing("185.190.150.1", "172.16.5.123");

print_r($response);
