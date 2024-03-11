<?php
require __DIR__ . '/../vendor/autoload.php';

$client = new \Meklis\WildcoreApiClient\WildcoreApiClient('', 'http://127.0.0.1:8088/api/v1/');

$user = $client->users()->getById(1);

print_r($user);

//Meklis\WildcoreApiClient\Models\User\User Object
//(
//    [id:protected] => 1
//    [name:protected] => Admin
//    [role:protected] => Meklis\WildcoreApiClient\Models\UserRoles\UserRole Object
//        (
//            [id:protected] => -2
//            [params:protected] =>
//            [name:protected] => Owner
//            [display:protected] => 1
//            [permissions:protected] => Array
//                (
//                    [0] => system_info
//                    [1] => dashboard_global_edit
//                    [2] => dashboard_edit
//                    [3] => global_search
//                    [4] => system_configuration
//                    [5] => system_cross_auth_user
//                    [6] => system_status
//                    [7] => schedule_configuration
//                    [8] => system_logs_actions
//                    [9] => schedule_reports
//                    [10] => log_switcher_core_actions
//                    [11] => log_poller
//                    [12] => poller_info_by_device
//                    [13] => run_poller_by_device
//                    [14] => user_management
//                    [15] => user_management_config_strict_ip
//                    [16] => user_self_control
//                    [17] => user_display
//                    [18] => device_access_management
//                    [19] => device_groups_management
//                    [20] => device_show
//                    [21] => device_iface_management
//                    [22] => device_iface_manage_marks
//                    [23] => device_management
//                    [24] => external_apps_grafana
//                    [25] => external_apps_prometheus
//                    [26] => external_apps_alertmanager
//                    [27] => external_apps_phpmyadmin
//                    [28] => external_apps_oxidized
//                    [29] => analytics
//                    [30] => diag_arp_ping
//                    [31] => diag_icmp_ping
//                    [32] => diag_traceroute
//                    [33] => diag_interface
//                    [34] => events_show
//                    [35] => events_resolve
//                    [36] => events_configuration
//                    [37] => events_see_all
//                    [38] => fdb_history_by_interface
//                    [39] => unregistered_onts
//                    [40] => unregistered_onts_preview
//                    [41] => unregistered_onts_config
//                    [42] => links_view
//                    [43] => links_edit
//                    [44] => live_traffic_info
//                    [45] => macros_execute
//                    [46] => macros_edit
//                    [47] => notifications_full_access
//                    [48] => notifications_configure_contacts
//                    [49] => notifications_send_global_notify
//                    [50] => notifications_configure_self_contacts
//                    [51] => olts_info
//                    [52] => olts_ctrl_dereg
//                    [53] => olts_ctrl_reboot
//                    [54] => olts_ctrl_clear_counters
//                    [55] => olts_ctrl_reset
//                    [56] => olts_ctrl_disable
//                    [57] => olts_ctrl_description
//                    [58] => olts_ctrl_port
//                    [59] => olts_ctrl_uni_ports
//                    [60] => pon_boxes_view
//                    [61] => pon_boxes_map_editing
//                    [62] => prom_chart_info
//                    [63] => router_os_info
//                    [64] => sensor_devices_view
//                    [65] => sensor_devices_allow_switch_modes
//                    [66] => sensor_devices_configure
//                    [67] => switches_info
//                    [68] => switches_reboot_device
//                    [69] => switches_save_config
//                    [70] => switches_clear_counters
//                    [71] => switches_set_port_description
//                    [72] => switches_set_port_admin_state
//                    [73] => switches_set_port_admin_speed
//                    [74] => user_self
//                )
//
//            [description:protected] => System owner
//        )
//
//    [password:protected] =>
//    [created_at:protected] => 2023-05-04 17:37:52
//    [updated_at:protected] => 2024-03-02 20:23:52
//    [login:protected] => admin
//    [last_activity:protected] => 2024-03-11 23:21:26
//    [status:protected] => ENABLED
//    [language:protected] => ua
//    [settings:protected] => Array
//        (
//            [global] => Array
//                (
//                    [notification_place] => topRight
//                )
//
//            [device_dashboard] => Array
//                (
//                    [sort_by] => ip
//                    [down_devices_on_top] => 1
//                    [show_groups] => 1
//                )
//
//            [device] => Array
//                (
//                    [expand_pon_tree] =>
//                    [breadcrumb_show] => ip
//                    [interfaces_stat_type] => splitted
//                )
//
//            [strict_access_by_ip] => Array
//                (
//                    [enabled] =>
//                    [networks] => Array
//                        (
//                        )
//
//                )
//    [deviceGroups:protected] => Array
//        (
//            [0] => Meklis\WildcoreApiClient\Models\DeviceGroups\DeviceGroup Object
//                (
//                    [created_at:protected] => 2023-12-29 13:28:10
//                    [name:protected] => Olts
//                    [description:protected] => Passive optical network devices
//                )
//
//            [1] => Meklis\WildcoreApiClient\Models\DeviceGroups\DeviceGroup Object
//                (
//                    [created_at:protected] => 2023-12-29 13:27:42
//                    [name:protected] => Switches
//                    [description:protected] => L2+ FTTB devices
//                )
//
//        )
//
//)