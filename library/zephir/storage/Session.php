<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/22/2015
 * Time: 12:43 AM
 */

namespace library\zephir\storage;


class Session
{
    public function __construct(){
        session_start();
    }
}