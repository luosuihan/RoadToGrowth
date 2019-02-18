<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 14:59
 */
namespace framework;
class Factory
{
    public static function M($class)
    {
        static $model_list = [];
        $class_name = MODULE.'\\model\\'.$class;
//        echo " Factory :: $class_name ";
        if(!isset($model_list[$class_name])){
            $model_list[$class_name] = new $class_name;
        }
        return $model_list[$class_name];
    }
}