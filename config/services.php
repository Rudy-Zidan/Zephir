<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/28/2015
 * Time: 10:07 PM
 */

$service_manager = new \library\zephir\system\Services();

$service_manager->set('session',new \library\zephir\storage\Session());
$service_manager->set('router', new \library\zephir\system\Router());

return $service_manager;