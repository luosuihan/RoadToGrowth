<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/18
 * Time: 9:30
 */
error_reporting(1);
spl_autoload_register(userAutoload);
function userAutoload($class)
{
//    echo '需要的类名是:'.$class.'<br>';
    if($class == 'Smarty'){
        require_once './framework/smarty/libs/Smarty.class.php';
       return;
    }
    //拼接路径
    $arr = explode('\\',$class);
//    var_dump($arr);
    if($arr[0]=='framework'){
        $base_dir = './';
    }else{
        $base_dir = './application/';
    }
    $sub_dir = str_replace('\\','/',$class);
    //拼接后缀
    $last_fix = '.php';
    //拼接路径
    $class_file = $base_dir.$sub_dir.$last_fix;
//    echo " hahahha --> , $class_file";
    //判断是不是自己的文件文件路径
    if(file_exists($class_file)){
        require_once $class_file;
    }
}

$m = isset($_GET['m'])?$_GET['m'] : 'home';
define('MODULE',$m); //定义常量
$c = isset($_GET['c'])?$_GET['c'] : 'Order';
define('CONTROLLER',$c);
$a = isset($_GET['a'])?$_GET['a'] : 'orderlist';
define('ACTION',$a);

$controllerName = $m.'\\controller\\'.$c.'Controller';
//先加载控制器方法
//require_once './application/'.$m.'/controller/'.$controllerName.'.php';
$controller = new $controllerName;
$controller -> $a();