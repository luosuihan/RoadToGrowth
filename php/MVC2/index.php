<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/18
 * Time: 9:30
 */
//error_reporting(1);
spl_autoload_register(userAutoload);
function userAutoload($class)
{
    echo '需要的类名是:'.$class.'<br>';
    //拼接路径
    $arr = explode('\\',$class);
//    var_dump($arr);
    if($arr[0]=='framework'){
        $base_dir = './framework/';
    }else{
        $base_dir = './application/';
    }
    $sub_dir = str_replace('\\','/',$class);
//    $sub_dir = str_replace('\\','/',$class);
    //拼接后缀
    $last_fix = '.php';
    //拼接路径
    $class_file = $base_dir.$sub_dir.$last_fix;
//    var_dump($class_file);
//    echo " zz : $class_file<br>";
    require_once $class_file;
}

$m = isset($_GET['m'])?$_GET['m'] : 'home';
$c = isset($_GET['c'])?$_GET['c'] : 'Order';
$a = isset($_GET['a'])?$_GET['a'] : 'orderListText';

//$controllerName = $c.'Controller';
$controllerName = $m.'\\controller\\'.$c.'Controller';
//先加载控制器方法
//require_once './application/'.$m.'/controller/'.$controllerName.'.php';
$controller = new $controllerName;
$controller -> $a();