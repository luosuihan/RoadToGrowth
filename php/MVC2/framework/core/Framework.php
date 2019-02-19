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
        $config_f = $this->loadFrameworkConfig(); //框架层
//        var_dump($config_f);
        $config_c = $this->loadCommonConfig(); //公共模块
        $GLOBALS['config_a'] = array_merge($config_f,$config_c);//config_a 表示合成后的数组返回路径
        $this->initMCA();
        $config_m = $this->loadModuleConfig(); //模块层
        $GLOBALS['config_a'] = array_merge($GLOBALS['config'],$config_m);
        $this->initDispath();
      /* echo '<pre>';
       var_dump($this->loadFrameworkConfig());*/
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
       /* $m = isset($_GET['m'])?$_GET['m'] : 'home';
        define('MODULE',$m); //定义常量
        $c = isset($_GET['c'])?$_GET['c'] : 'Order';
        define('CONTROLLER',$c);
        $a = isset($_GET['a'])?$_GET['a'] : 'orderlist';
        define('ACTION',$a);*/
        //通过读取配置文件来加载模块
        $m = isset($_GET['m'])?$_GET['m'] : $GLOBALS['config_a']['default_module'];
        define('MODULE',$m); //定义常量
        $c = isset($_GET['c'])?$_GET['c'] : $GLOBALS['config_a']['default_controller'];
        define('CONTROLLER',$c);
        $a = isset($_GET['a'])?$_GET['a'] : $GLOBALS['config_a']['default_action'];
//        var_dump('活动函数'.$a);
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
      //  echo "物理地址".__DIR__.'<br>';
        //项目存放的路径 -> D:\code\htmlCode\H5text\php\MVC2
       // echo "工作目录".getcwd().'<br>';

        define("ROOT",str_replace('\\','/',getcwd().'/'));
       /* echo'<pre>';
        var_dump(ROOT);*/
       define("APP",ROOT."application/");
//        var_dump(APP);
        define("FRAMEWORK","framework/");
//        var_dump(FRAMEWORK);
    }
    //加载fragment层的配置文件
    public function loadFrameworkConfig()
    {
        $config_file = './framework/config/config.php';
        return require_once $config_file;
    }
    //加载APP层公共的配置文件
    public function loadCommonConfig()
    {
        $config_file = './application/common/config/config.php';
        if(file_exists($config_file)){
            return require_once $config_file;
        }else{
            return [];
        }
    }
    //加载APP层下前台与后台的配置文件 (home/admin)
    public function loadModuleConfig()
    {
        $config_file = './application/'.MODULE.'common/config/config.php';
        if (file_exists($config_file)){
            return require_once $config_file;
        }else{
            return [];
        }
    }
}