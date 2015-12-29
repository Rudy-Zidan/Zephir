<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/22/2015
 * Time: 12:35 AM
 */
define('ROOT', dirname(dirname(__FILE__)));

function __autoload($classname){
    include_once(ROOT . '\\' . $classname . ".php");
}



