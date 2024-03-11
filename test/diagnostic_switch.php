<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');


$swPort = $client->deviceInterfaces()->searchByParameters(
    (new \Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceInterfaceSearchParameters())
    ->setDeviceIp("10.4.1.13")
    ->setInterfaceName("1/3")
);

echo "Found ".count($swPort)." interfaces\n";


foreach ($swPort as $iface) {
    $diagnostic = $client->components()->diagnostic()->interfaceDiagnostic($iface);
    print_r($diagnostic->getDiagnostic()->getData());
}

//Found 1 interfaces
//Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results\DiagnosticData Object
//(
//    [interface:protected] => Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface Object
//        (
//            [id:protected] => 3
//            [name:protected] => 1/3
//            [_key:protected] => 3
//            [type:protected] => FE
//            [xid:protected] =>
//            [onuNum:protected] =>
//            [uni:protected] =>
//            [pontype:protected] =>
//            [ifaceName:protected] =>
//            [parent:protected] =>
//            [_technology:protected] =>
//            [_frame:protected] =>
//            [_slot:protected] =>
//            [_port:protected] =>
//            [_ont:protected] =>
//            [_pon_max_ont_size:protected] =>
//        )
//
//    [fdb:protected] => Array
//        (
//            [0] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\FDB Object
//                (
//                    [_virtual_port:protected] =>
//                    [vlan_id:protected] => 101
//                    [mac_address:protected] => 7C:8B:CA:FA:F9:F1
//                    [uni:protected] =>
//                    [status:protected] => LEARNED
//                )
//
//        )
//
//    [linkInfo:protected] => Array
//        (
//            [0] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches\LinkInfo Object
//                (
//                    [mediumType:protected] => Cooper
//                    [type:protected] => FE
//                    [lastChange:protected] => 12/01/2016 06:04:42
//                    [connectorPresent:protected] =>
//                    [operStatus:protected] => Up
//                    [description:protected] => Test
//                    [adminState:protected] => Auto
//                    [nwayStatus:protected] => 100-Full
//                    [addressLearning:protected] =>
//                )
//
//        )
//
//    [errors:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Switches\Errors Object
//        (
//            [inErrors:protected] => 0
//            [outErrors:protected] => 0
//            [inDiscards:protected] => 0
//            [outDiscards:protected] => 610537
//        )
//
//    [counters:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\Counters Object
//        (
//            [inOctets] => 1057579746
//            [outOctets] => 55976441647
//            [inMulticastPkts] => 2
//            [outMulticastPkts] => 25885851
//            [inBroadcastPkts] => 2305
//            [outBroadcastPkts] => 2617150
//        )
//
//    [description:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\Description Object
//        (
//            [description:protected] => Test
//        )
//
//    [vendor:protected] =>
//    [status:protected] =>
//    [uni:protected] =>
//    [name:protected] =>
//    [ident:protected] =>
//    [reasons:protected] =>
//    [optical:protected] =>
//    [cable_diag:protected] => Array
//        (
//            [pairs] => Array
//                (
//                    [0] => Array
//                        (
//                            [number] => 1
//                            [status] => OK
//                            [length] => 92
//                        )
//
//                    [1] => Array
//                        (
//                            [number] => 2
//                            [status] => OK
//                            [length] => 92
//                        )
//
//                )
//
//        )
//
//    [vlans:protected] => Array
//        (
//            [0] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\VlanOnPort Object
//                (
//                    [id:protected] => 101
//                    [name:protected] => USERS101
//                    [type:protected] => untagged
//                )
//
//        )
//
//)