<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/19
 * Time: 10:31
 */
return [
    //数据库配置信息
   'host'                        =>        '127.0.0.1',
   'user'                        =>        'root',
   'pass'                        =>        '123456',
   'dbname'                      =>        'ecshop',
   'port'                        =>        3306,

    //smarty配置信息
    'left_delimiter'            =>        '<{',
    'right_delimiter'           =>        '}>',

    //默认模块
    'default_module'            =>        'home',
    'default_controller'        =>        'Order',
    'default_action'            =>        'orderlist',
];