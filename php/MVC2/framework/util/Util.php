<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 13:09
 */
namespace framework\util;
class Util
{
    //读取数据库配置文件
    public static function getINIflie($path)
    {
        if (file_exists($path)){
            $getPath = parse_ini_file($path);
        }
        return $getPath;
    }
}