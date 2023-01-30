<?php

defined("BASEPATH") or exit("No direct script access allowed");
/*
Module Name: Demo DataTable
Description: Demo
Version: 1.0.0
Requires at least: 2.3.*
Author: SlimCRM
Author URI: https://xxx.com/slimcrm
*/
define('DEMO_DATATABLE_MODULE_NAME', 'demo_datatable');


/**
 * Register activation module hook
 */
register_activation_hook(DEMO_DATATABLE_MODULE_NAME, 'demo_datatable_module_activation_hook');

function demo_datatable_module_activation_hook()
{
    require_once(__DIR__ . '/install.php');
}
