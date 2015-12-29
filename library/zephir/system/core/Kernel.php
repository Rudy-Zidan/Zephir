<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/28/2015
 * Time: 9:51 PM
 */

namespace library\zephir\system\core;


class kernel
{
    private $config;
    private $services;

    public function run(){
        $this->load_config();
        $this->load_services();
        $this->set_environment();
    }

    private function load_config(){
        $this->config = require_once(__DIR__ . '\..\..\..\..\config\config.php');
    }
    private function load_services(){
        $this->services = require_once(__DIR__ . '\..\..\..\..\config\services.php');
    }
    private function set_environment(){
        if($this->config->setting['environment']=='development') {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
}