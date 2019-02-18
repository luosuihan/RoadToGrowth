<?php
namespace framework\core;

/**
 * 工厂类，用来根据用户传递的类名，生成一个单例对象
 */
class Factory
{
    //为了不创建对象就能实现功能，采用静态方法
    //参数：待实例化的模型类名，例如：UserModel....
    public static function M($className)
    {
        static $model_list = [];
        if(!isset($model_list[$className])){
            //数组中没有该类对应的对象
            $model_list[$className] = new $className;  //new UserModel
        }
        return $model_list[$className];
    }
}

//class UserModel{}
//
//$obj1 = Factory::M('UserModel');
//$obj2 = Factory::M('UserModel');
//$obj3 = Factory::M('UserModel');
//
//echo '<pre>';
//var_dump($obj1,$obj2,$obj3);