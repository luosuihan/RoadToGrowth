<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/18
 * Time: 10:11
 */
error_reporting(1);
spl_autoload_register(userAutoload,false,true);
function userAutoload($className)
{
    echo '需要的类名是:'.$className.'<br>';
    //根据类名找到类对应的文件
  /*  $class_file = $className.'.php';
    require_once $class_file;*/
}
DAO::getSingle();
