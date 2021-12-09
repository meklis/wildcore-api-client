# API Client for wildcore agent

## Supported endpoints
* Diagnostic
* Search device


## Example usage
```php
<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

//Search port over IP
$response = $client->searchDevice()->searchArpAndFdbOverIP(
    ["10.15.1.2","10.16.1.2"], //Devices for search  on FDB
    ["185.253.216.129"], // Routers  for search ARP
    "185.253.216.135" // Searched IP-address
);
echo "Device IP: {$response->getFdb()->getDevice()->getIp()}\n";
echo "Device Port: {$response->getFdb()->getInterface()->getName()}\n";
echo "MAC address: {$response->getFdb()->getMac()}\n";
echo "Vlan ID: {$response->getFdb()->getVlanId()}\n";


//Diagnostic on OLT
$response = $client->diagnostics()->interfaceDiagnostic("10.15.1.2", 16779014);

echo "Status: {$response->getDetailed()->getOlt()->getStatus()}\n";
echo "UNI ports: \n";
print_r($response->getDetailed()->getOlt()->getUniPorts());
//OUTPUT: 
/**
Device IP: 10.16.1.2
Device Port: pon0/0/1:1
MAC address: 04:5E:A4:E2:9F:80
Vlan ID: 821
 
Status: 
UNI ports: 
Array
(
    [0] => Meklis\WildcoreApiClient\Models\Objects\OntUniPort Object
        (
            [status:protected] => Up
            [interface:protected] => Meklis\WildcoreApiClient\Models\Objects\DeviceIface Object
                (
                    [id:protected] => 16779014
                    [name:protected] => pon0/0/1:6
                    [_key:protected] => 
                    [type:protected] => ONU
                    [xid:protected] => 7
                    [onuNum:protected] => 6
                    [uni:protected] => 1
                    [pontype:protected] => epon
                )

            [adminStatus:protected] => Enabled
            [vlanId:protected] => 811
            [vlanMode:protected] => Untagged
            [counters:protected] => 
            [rmonIn:protected] => 
            [rmonOut:protected] => 
        )

)

 */
```