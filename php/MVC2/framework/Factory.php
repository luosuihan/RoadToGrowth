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
    public static function M($className)
    {
        static $model_list = [];
        if(!isset($model_list[$className])){
            $model_list[$className] = new $className;
        }
        return $model_list[$className];
    }
}