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
    if ($class == 'Smarty'){
        require_once './framework/vendor/smarty/Smarty.class.php';
        return;
    }
    //切割路径
    $arr = explode('\\',$class);
//    var_dump($arr);
//    die;
    //拼接路径
    if ($arr[0]=='framework'){
        $base_dir = './';
    }else{
        $base_dir = './application/';
    }
    //在根目录上进行凭借
    $sub_dir = str_replace('\\','/',$class);
//    var_dump($sub_dir);
    $last_fix = '.php';
    $class_file = $base_dir.$sub_dir.$last_fix;
//    var_dump($class_file);
    if (file_exists($class_file)){
        require_once $class_file;
    }
}

//入口文件
$m = isset($_GET['m'])?$_GET['m']:'home';
define('MODEL',$m);
$c = isset($_GET['c'])?$_GET['c']:'Goods';
define('CONTROLLER',$c);
$a = isset($_GET['a'])?$_GET['a']:'goodsList';
define('ACTION',$a);
$controllerName = $m.'\\controller\\'.$c.'Controller';
echo $controllerName.'<br>';
//require_once './application/'.$m.'/controller/'.$controllerName.'.php';
$controller = new $controllerName;
$controller -> $a();