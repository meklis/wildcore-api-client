<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$device = $client->devices()->getByIp("10.2.1.11");
$switcherCore = $device->getSwitcherCore();

print_r($switcherCore->getModulesList());
/**
 * Array
(
[0] => system
[1] => pon_ports_list
[2] => pon_count_registered_onts
[3] => pon_onts_status
[4] => pon_onts_mac_addr
[5] => pon_onts_optical
[6] => pon_ports_optical
[7] => pon_onts_reasons
[8] => pon_onts_vendor
[9] => fdb
[10] => save_config
[11] => pon_ont_reboot
[12] => pon_ont_reset
[13] => pon_ont_delete
[14] => parse_interface
[15] => sys_resources
[16] => interface_counters
[17] => interfaces_list
[18] => interface_descriptions
[19] => uni_interfaces_status
[20] => uni_interfaces_vlans
)
 */

print_r($switcherCore->call('interface_descriptions'));