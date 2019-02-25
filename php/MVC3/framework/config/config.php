<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/24
 * Time: 10:16
 */
return [
    //数据库
    "host"                => '127.0.0.1',
    "user"                => 'root',
    "pwd"                 => '123456',
    "dbname"              => 'demo3',
    "port"                => 3306,

    //数据库表名前缀
    "table_prefix"       => '',

    //入口默认信息
    "default_model"      => "home",
    "default_controller"      => "Goods",
    "default_action"      => "goodsList",

    //smarty 参数配置
    "left_delimiter"    =>"<{",
    "right_delimiter"    =>"}>",
];