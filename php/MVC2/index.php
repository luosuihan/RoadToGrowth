<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/18
 * Time: 9:30
 */
//error_reporting(1);
spl_autoload_register(userAutoload,false,true);
function userAutoload($class)
{
    echo '需要的类名是:'.$class.'<br>';
}
$m = isset($_GET['m'])?$_GET['m'] : 'home';
$c = isset($_GET['c'])?$_GET['c'] : 'Order';
$a = isset($_GET['a'])?$_GET['a'] : 'orderListText';

$controllerName = $c.'Controller';
//var_dump('./application/'.$m.'/controller/'.$controllerName.'.php');
//先加载控制器方法
//require_once './application/'.$m.'/controller/'.$controllerName.'.php';
$sdf = new $controllerName;
$sdf -> $a();