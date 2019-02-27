<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 14:17
 */
return [
    //数据库配置信息
    'host'             =>     '127.0.0.1',
    'user'             =>     'root',
    'pwd'              =>     '123456',
    'dbname'           =>     'book',
    'port'             =>     3306,

    //默认启动页
    'default_model'                =>   'admin',
    'default_controller'          =>    'User',
    'default_action'              =>    'showUser',

    //smarty 参数配置
    "left_delimiter"    =>'<{',
    "right_delimiter"    =>'}>',
];