<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/28/2015
 * Time: 10:37 PM
 */

namespace library\zephir\system;


class Services
{
    private $services;

    public function set($name,$object){
        $this->services[$name] = $object;
    }

    public function get($name){
        return $this->services[$name];
    }
}