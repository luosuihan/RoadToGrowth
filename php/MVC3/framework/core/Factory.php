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
        $className = MODEL.'\\model\\'.$class;
        if (!isset($class_list[$className])){ //!isset($className)  这种写法会包找不到该类的 函数方法
            $class_list[$className] = new $className;
        }
        return $class_list[$className];
    }
}