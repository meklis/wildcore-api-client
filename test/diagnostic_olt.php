<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');


$ponInterface = $client->deviceInterfaces()->searchByParameters(
    (new \Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceInterfaceSearchParameters())
    ->setDeviceIp("10.2.0.2")
    ->setInterfaceName("pon0/0/2:2")
);

echo "Found ".count($ponInterface)." interfaces\n";


foreach ($ponInterface as $iface) {
    $diagnostic = $client->components()->diagnostic()->interfaceDiagnostic($iface);
    print_r($diagnostic->getDiagnostic()->getData());
}

//Found 1 interfaces
//Meklis\WildcoreApiClient\Models\Components\Diagnostic\Results\DiagnosticData Object
//(
//    [interface:protected] => Meklis\WildcoreApiClient\Models\DeviceInterface\DeviceSwcoreIface Object
//        (
//            [id:protected] => 16779266
//            [name:protected] => pon0/0/2:2
//            [_key:protected] =>
//            [type:protected] => ONU
//            [xid:protected] => 8
//            [onuNum:protected] => 2
//            [uni:protected] =>
//            [pontype:protected] =>
//            [ifaceName:protected] =>
//            [parent:protected] => 16779264
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
//                    [vlan_id:protected] => 601
//                    [mac_address:protected] => C0:25:2F:ED:29:75
//                    [uni:protected] =>
//                    [status:protected] =>
//                )
//
//        )
//
//    [linkInfo:protected] =>
//    [errors:protected] =>
//    [counters:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\General\Counters Object
//        (
//            [inErrors:protected] =>
//            [outErrors:protected] =>
//            [inDiscards:protected] => 0
//            [outDiscards:protected] => 0
//            [inOctets:protected] => 0
//            [outOctets:protected] => 0
//            [inMulticastPkts:protected] => 0
//            [outMulticastPkts:protected] => 0
//            [inBroadcastPkts:protected] =>
//            [outBroadcastPkts:protected] =>
//        )
//
//    [description:protected] => 6156
//    [vendor:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Vendor Object
//        (
//            [vendor:protected] => HWTC
//            [model:protected] => X910
//            [model_id:protected] =>
//            [omcc_version:protected] =>
//            [versions:protected] =>
//            [ver_software:protected] => V1.22.1013
//            [ver_hardware:protected] => F660.1B
//        )
//
//    [status:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Status Object
//        (
//            [_onu_disabled:protected] =>
//            [online:protected] => Online
//            [bind:protected] => Online
//            [admin:protected] =>
//            [_conf_status:protected] =>
//        )
//
//    [uni:protected] => Array
//        (
//            [0] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Uni Object
//                (
//                    [num:protected] => 1
//                    [admin_state:protected] => Enabled
//                    [status:protected] => Up
//                )
//
//        )
//
//    [name:protected] =>
//    [ident:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Ident Object
//        (
//            [value:protected] => 80:F7:A6:4A:FB:78
//            [type:protected] => MAC
//        )
//
//    [reasons:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Reasons Object
//        (
//            [historyTable] =>
//            [lastReg] => 2023-09-29 20:43:22
//            [lastRegSince] => 164d 1h 20min 3sec
//            [lastDereg] =>
//            [lastChange] =>
//            [lastDeregSince] =>
//            [lastDownReason] => LOS
//            [lastChangeSince] =>
//        )
//
//    [optical:protected] => Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt\Optical Object
//        (
//            [oltRx:protected] =>
//            [oltTx:protected] =>
//            [rx:protected] => -28.86
//            [tx:protected] => 1.74
//            [voltage:protected] => 3.3
//            [temp:protected] => 28.46
//            [distance:protected] => 431
//        )
//
//)