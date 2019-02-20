<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 15:12
 */
namespace framework\core;
class Factory
{
    public static function M($class)
    {
        static $class_list = [];
        if (isset($class_list)){
            $class_list[$class] = new $class;
        }
        return $class_list[$class];
    }
}