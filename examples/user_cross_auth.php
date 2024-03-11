<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$user = $client->users()->crossAuth("admin", 600, "8.8.8.8");

print_r($user);

//Meklis\WildcoreApiClient\Models\User\Types\CrossAuthData Object
//(
//    [user:protected] => Meklis\WildcoreApiClient\Models\User\User Object
//        (
//            [id:protected] => 1
//            [name:protected] => Admin
//            [role:protected] =>
//            [password:protected] =>
//            [created_at:protected] =>
//            [updated_at:protected] =>
//            [login:protected] => admin
//            [last_activity:protected] =>
//            [status:protected] =>
//            [language:protected] =>
//            [settings:protected] =>
//            [deviceGroups:protected] => Array
//                (
//                )
//
//        )
//
//    [expired_at:protected] => 2024-03-11 23:28:11
//    [auth_key:protected] => a8847b5b-cd7b-4f8f-bde4-a85cce983009
//)