<?php

require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$response = $client->diagnostics()->interfaceDiagnostic("10.15.1.2", 16779013);

print_r($response);
