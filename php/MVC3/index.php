<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 16:58
 */
//自动加载
spl_autoload_register("myautoload",false,true);
function myautoload($class){
    echo "需要类：".$class."<br>";
    $class_file = $class.'.php';
    require_once $class_file;
}

//入口文件
$m = isset($_GET['m'])?$_GET['m']:'home';
$c = isset($_GET['c'])?$_GET['c']:'GoodsController';
$a = isset($_GET['a'])?$_GET['a']:'goodsListText';
$controllerName = $c;
//require_once './application/'.$m.'/controller/'.$controllerName.'.php';
$controller = new $controllerName;
$controller -> $a();