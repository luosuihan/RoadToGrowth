<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 14:27
 */
namespace framework\core;
class BookFramework
{
    public function __construct()
    {
        $this ->initConstantPath();
        $GLOBALS['config'] = $this -> initFrameworkConfig();
        $this ->initAutoLoad();
        $this ->initMCA();
        $this ->initInletFile();

    }
    //自动加载
    public function initAutoLoad()
    {
        spl_autoload_register(array($this,'myAutoload'));
    }
    public function myAutoload($class)
    {
//        echo "需要：".$class.'<br>';
//        str_replace()
        if($class == "Smarty"){
            require_once './framework/vendor/smarty/Smarty.class.php';
        }
        $arr = explode('\\',$class);
        if ($arr[0] == "framework"){
            $base_dir = './';
        }else{
            $base_dir = './application/';
        }
        //在根目录上进行凭借
        $sub_dir = str_replace('\\', '/', $class);
        $last_fix = '.php';
        $class_file = $base_dir . $sub_dir . $last_fix;
        if(file_exists($class_file)){
            require_once $class_file;
        }

    }
    public function initFrameworkConfig()
    {
        $config = "./framework/config/config.php";
        return require_once $config;
    }
    public function initMCA()
    {
        $m = isset($_GET['m'])?$_GET['m']:$GLOBALS['config']['default_model'];
        define("MODEL",$m);
        $c = isset($_GET['c'])?$_GET['c']:$GLOBALS['config']['default_controller'];
        define("CONTROLLER",$c);
        $a = isset($_GET['a'])?$_GET['a']:$GLOBALS['config']['default_action'];
        define("ACTION",$a);
    }
    public function initInletFile()
    {
        $controllerName = MODEL.'\\controller\\'.CONTROLLER.'Controller';
        $controller = new $controllerName;
        $a = ACTION;
        $controller -> $a();
    }
    //获取文件路径
    public function initConstantPath()
    {
        /*D:\code\htmlCode\H5text\php\booksystem\framework\core  __DIR__
        D:\code\htmlCode\H5text\php\booksystem   getcwd() */
        /*echo ''.__DIR__.'<br>';
        echo ''.getcwd().'<br>';*/
        define('BROOT',getcwd().'/');
        define('BAPP',BROOT.'application/');
        define('BFRAMEWORK',BROOT.'framework/');
    }
}