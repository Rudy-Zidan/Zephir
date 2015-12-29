<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/28/2015
 * Time: 10:02 PM
 */

namespace library\zephir\system;


class Dispatcher
{
    private $router;
    public function attach($url,$route){
        $url_array = array();
        $url_array = explode("/",$url);
        $map = array();
        if(array_key_exists($url_array[0],$route)){
            $map = $route[$url_array[0]];
        }
        $controller = $url_array[$map['controller']];
        $action = $url_array[$map['action']];
        $queryString = $url_array[$map['params']];
    }
}