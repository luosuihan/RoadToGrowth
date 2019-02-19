<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/19
 * Time: 9:36
 */
namespace framework\core;
error_reporting(1);
class Framework
{
    public function __construct()
    {
        $this->initConst();
        $this->initAutoload();
        $this->initMCA();
        $this->initDispath();
//        gitcwd();
    }
    public function initAutoload()
    {
        //通过回调函数的方式来加载userAutoload 函数
        spl_autoload_register(array($this,'userAutoload'));
    }
    public function userAutoload($class)
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
        //判断是不是自己的文件文件路径
        if(file_exists($class_file)){
            require_once $class_file;
        }
    }
    public function initMCA()
    {
        $m = isset($_GET['m'])?$_GET['m'] : 'home';
        define('MODULE',$m); //定义常量
        $c = isset($_GET['c'])?$_GET['c'] : 'Order';
        define('CONTROLLER',$c);
        $a = isset($_GET['a'])?$_GET['a'] : 'orderlist';
        define('ACTION',$a);
    }
    public function initDispath()
    {
        $controllerName = MODULE.'\\controller\\'.CONTROLLER.'Controller';
        //先加载控制器方法
        //require_once './application/'.$m.'/controller/'.$controllerName.'.php';
        $controller = new $controllerName;
        $a = ACTION;
        $controller -> $a();
    }
    //定义常量
    public function initConst()
    {
        //当前文件的完整路径 -> D:\code\htmlCode\H5text\php\MVC2\framework\core
        echo "物理地址".__DIR__.'<br>';
        //项目存放的路径 -> D:\code\htmlCode\H5text\php\MVC2
        echo "工作目录".getcwd().'<br>';

        define("ROOT",str_replace('\\','/',getcwd().'/'));
       /* echo'<pre>';
        var_dump(ROOT);*/
       define("APP",ROOT."application/");
//        var_dump(APP);
        define("FRAMEWORK","framework/");
        var_dump(FRAMEWORK);
    }
}