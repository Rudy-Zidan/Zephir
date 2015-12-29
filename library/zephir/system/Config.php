<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/22/2015
 * Time: 12:56 AM
 */

namespace library\zephir\system;


class config
{
    public $setting;

    public function __construct($setting)
    {
        $this->setting = $setting;
    }
}