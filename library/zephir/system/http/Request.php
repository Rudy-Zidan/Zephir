<?php

/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/29/2015
 * Time: 9:21 PM
 */
namespace library\zephir\system\http;

class Request
{
    public function get(){
        return $_GET;
    }

    public function get_post(){
        return $_POST;
    }

    public function is_get(){
        return $this->check_request_method('GET');
    }

    public function is_post(){
        return $this->check_request_method('POST');
    }

    public function is_put(){
        return $this->check_request_method('PUT');
    }

    public function is_head(){
        return $this->check_request_method('HEAD');
    }

    public function get_header($header){
        return http_get_request_headers()[$header];
    }

    public function get_headers(){
        return http_get_request_headers();
    }
    public function strip_alashes_deep($value) {
        $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
        return $value;
    }

    public function remove_magic_quotes() {
        if ( get_magic_quotes_gpc() ) {
            $_GET    = $this->strip_alashes_deep($_GET   );
            $_POST   = $this->strip_alashes_deep($_POST  );
            $_COOKIE = $this->strip_alashes_deep($_COOKIE);
        }
    }

    public function unregister_globals() {
        if (ini_get('register_globals')) {
            $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]) {
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }

    private function check_request_method($method){
        if($_SERVER['REQUEST_METHOD'] == $method)
            return true;
        return false;
    }
}