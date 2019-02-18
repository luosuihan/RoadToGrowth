<?php
//必须先有类，才能实例化对象
error_reporting(0);
function myAutoload($className)
{
    echo '需要的类名是:'.$className.'<br>';
    //根据类名找到类对应的文件
    $class_file = $className.'.php';
    require_once $class_file;
}
//在PHP7.2版本后必须使用如下这种方式进行注册自动加载
/*
 * 参数1，需要加载的类名
 * 参数2，true ：表示如果自动加载无法注册是报异常；false：反之
 * 参数3，true为预加载，false为向后追加
 * */
spl_autoload_register(myAutoload,false,true);
$cat = new Cat1();
//$cat1 = new Cat2();

//echo $cat.name;
echo '<pre>';
//var_dump($cat);
//var_dump($cat1);
/*var_dump($dog);
var_dump($tiger);*/