<?php
/**
 * Created by PhpStorm.
 * User: 小辛
 * Date: 2017/9/9
 * Time: 9:44
 */
//注册一个自动加载之后，就会在需要一个类但是没有找到这个类的定义时，就会自动触发自动加载
//而且还会将需要的类名传递到自动加载函数中
spl_autoload_register('userAutoload');
function userAutoload($class)
{
    echo "需要:".$class.'<br>';
    if($class == 'Smarty'){
        require_once './framework/vendor/smarty/Smarty.class.php';
        return;
    }
    //根据类名将需要的类加载进来，要想通过类名找到这个类的所在位置，如果类前面有类的空间、目录
    //根据类名解析出类所在的路径
    $arr = explode('\\',$class);
    if($arr[0] == 'framework'){
        $base_dir = './';
    }else{
        $base_dir = './application/';
    }
    //拼接上命名空间所代表的路径: home\controller\UserController   framework\core\Controller
    $sub_dir = str_replace('\\','/',$class);

    //后缀
    if(substr($arr[count($arr)-1],0,2) == 'i_'){
        $last_fix = '.interface.php';
    }else{
        $last_fix = '.class.php';
    }

    $class_file = $base_dir . $sub_dir . $last_fix;
    if(file_exists($class_file)){
        require_once $class_file;
    }
}


//接收用户的需求，也就是地址栏的参数
$m = isset($_GET['m']) ? $_GET['m'] : 'home';
define('MODULE',$m);

$c = isset($_GET['c']) ? $_GET['c'] : 'User';
define('CONTROLLER',$c);

$a = isset($_GET['a']) ? $_GET['a'] : 'userSelect';
define('ACTION',$a);

//将其引导到目的地
$controller_name = $m.'\\controller\\'.$c.'Controller';  //home\controller\UserController

//实例化控制器对象
$controller = new $controller_name;

//调用控制器的方法
$controller -> $a();

