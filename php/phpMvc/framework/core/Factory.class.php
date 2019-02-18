<?php
/**
 * 工厂类，就是用来实例化模型对象的
 */
namespace framework\core;
class Factory
{
    //参数就是模型类名：UserModel
    public static function M($class)
    {
        static $model_list = [];
        $className = MODULE.'\\model\\'.$class;
        if(!isset($model_list[$className])){
            $model_list[$className] = new $className;   // new home\model\UserModel
        }
        return $model_list[$className];
    }
}