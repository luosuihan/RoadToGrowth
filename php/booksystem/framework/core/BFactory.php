<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 17:07
 */
namespace framework\core;
class BFactory
{
    public static function M($class)
    {
        //错误写法
       /* static $classlist = [];
        $className = MODEL.'\\model\\'.$class;
        if (isset($classlist[$className])){     ----------
            $classlist[] = new $className;   -------
        }
        return $classlist[$className];*/
       //正确写法
        static $class_list = [];
        $className = MODEL.'\\model\\'.$class;
        if (!isset($class_list[$className])){ //!isset($className)  这种写法会包找不到该类的 函数方法
            $class_list[$className] = new $className;
        }
        return $class_list[$className];
    }
}