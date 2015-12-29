<?php
/**
 * Created by PhpStorm.
 * User: Rudy Zidan
 * Date: 12/22/2015
 * Time: 12:53 AM
 */

return new \library\zephir\system\config(
    [
      'environment'  => 'development',
      'database'    => array(
          'host'        =>  'localhost',
          'dbname'      =>  '',
          'user'        =>  'root',
          'password'    =>  'eragon'
      ),
        'route' => array(
            'index' => array(
                'controller' => 0,
                'action'     => 1,
                'params'     => 2
            ),
            'admin'  => array(
                'controller' => 1,
                'action'     => 2,
                'params'     => 3,
            )
        )
  ]
);