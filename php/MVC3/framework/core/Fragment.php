<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/22
 * Time: 17:13
 */
namespace framework\core;
class Fragment
{
    public function __construct()
    {
        $this -> initAutoload();
        $this -> initInletFile();
        $this -> initInlet();

    }
    //初始化自动加载类
    public function initAutoload()
    {
        spl_autoload_register(array($this,'myautoload'));
    }
    //自动加载类
    public function myautoload($class)
    {
        echo "需要类：" . $class . "<br>";
        if ($class == 'Smarty') {
            require_once './framework/vendor/smarty/Smarty.class.php';
            return;
        }
        //切割路径
        $arr = explode('\\', $class);
        //拼接路径
        if ($arr[0] == 'framework') {
            $base_dir = './';
        } else {
            $base_dir = './application/';
        }
        //在根目录上进行凭借
        $sub_dir = str_replace('\\', '/', $class);
        $last_fix = '.php';
        $class_file = $base_dir . $sub_dir . $last_fix;
        if (file_exists($class_file)) {
            require_once $class_file;
        }
    }
    //入口文件路径名
    public function initInletFile()
    {
        $m = isset($_GET['m'])?$_GET['m']:'home';
        define('MODEL',$m);
        $c = isset($_GET['c'])?$_GET['c']:'Goods';
        define('CONTROLLER',$c);
        $a = isset($_GET['a'])?$_GET['a']:'goodsList';
        define('ACTION',$a);
    }
    //入口处
    public function initInlet()
    {
        $controllerName = MODEL.'\\controller\\'.CONTROLLER.'Controller';
        $controller = new $controllerName;
        $a = ACTION;
        $controller -> $a();
    }
}