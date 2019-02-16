<?php

/**
 * 工厂模式
 * User: m1762
 * Date: 2019/1/26
 * Time: 8:43
 */
class Factory
{
    public function M($classname){
        static $model_list = [];
        if(!isset($model_list[$classname])){
            $model_list[$classname] = new $classname;
        }
        return $model_list[$classname];
    }
}