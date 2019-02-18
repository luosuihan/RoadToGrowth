<?php
/**
 * 入口文件（分发控制器），前台接待
 * 根据需求将你带到指定的目录
 */
//注册自动加载处理器
spl_autoload_register('userAutoload');
function userAutoload($class)
{
    echo "需要:".$class.'<br>';   // admin\controller\OrderController
    //1. 先根据 \ 进行字符串拆分：炸开
    $arr = explode('\\',$class);

    //2. 开始拼接（项目的类都是在application目录下，框架的类都是在framework目录下）
    if($arr[0] == 'framework'){
        //根目录
        $base_dir = './framework/';
    }else{
        //根目录
        $base_dir = './application/';
    }
    //3.在根目录的基础上拼接类所在的路径
    $sub_dir = str_replace('\\','/',$class);

    //4. 拼接后缀
    $last_fix = '.class.php';

    $class_file = $base_dir.$sub_dir.$last_fix;
    require_once $class_file;
}

//接收用户的需求,如果用户什么也没说，我们就先把他带到默认的地方
$m = isset($_GET['m']) ? $_GET['m'] : 'home';
$c = isset($_GET['c']) ? $_GET['c'] : 'Order';
$a = isset($_GET['a']) ? $_GET['a'] : 'orderInsert';

//根据需求访问指定的方法
//先加载控制器
$controllerName = $m.'\\controller\\'.$c.'Controller';
//require_once './application/'.$m.'/controller/'.$controllerName.'.class.php';
//require_once './application/home/controller/OrderController.class.php';

//实例化控制器对象
$controller = new $controllerName;   // home\controller\OrderController
//并调用控制器的方法
$controller -> $a();


