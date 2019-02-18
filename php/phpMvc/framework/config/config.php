<?php
/**
 * 框架的配置文件，保存框架的数据
 */
return [
    //数据库的配置信息
    'host'                  =>  '127.0.0.1',
    'user'                  =>  'root',
    'pass'                  =>  '123456',
    'dbname'                =>  'ecshop',
    'port'                  =>  3306,
    'charset'               =>  'utf8',

    //smarty的配置信息
    'left_delimiter'        =>  '<{',
    'right_delimiter'       =>  '}>',

    //默认的模块（前台还是后台）
    'default_module'        =>  'home',
    'default_controller'    =>  'Goods',
    'default_action'        =>  'goodsList'
];