<?php
/**
 * 封装的入口文件的操作
 */
namespace framework\core;
class Framework
{
    public function __construct()
    {
        //初始化常量的定义
        $this -> initConst();
        $this -> initAutoload();

        //加载配置文件并合并
        $config1 = $this -> loadFrameworkConfig();
        $config2 = $this -> loadCommonConfig();

        //将合并的结果保存在一个超全局变量中
        $GLOBALS['config'] = array_merge($config1,$config2);

        $this -> initMCA();

        $config3 = $this -> loadModuleConfig();  //使用了常量MODULE，在MCA中定义的
        $GLOBALS['config'] = array_merge($GLOBALS['config'],$config3);

        $this -> initDispatch();
    }
    //常量定义
    public function initConst()
    {
        //echo "物理地址:".__DIR__.'<br>';  D:\tnwamp\apache\htdocs\0909\framework\core
        //echo "工作目录:".getcwd();  D:\tnwamp\apache\htdocs\0909
        //项目的根目录
        define('ROOT',str_replace('\\','/',getcwd().'/'));
        //应用程序目录
        define('APP',ROOT.'application/');
        //框架的目录
        define('FRAMEWORK',ROOT.'framework/');
    }
    //自动加载
    public function initAutoload()
    {
        //下标0就是对象，下标1就是对象的方法
        spl_autoload_register(array($this,"userAutoload"));
    }
    //注册的自动加载处理器
    public function userAutoload($class)
    {
        //echo "需要:".$class.'<br>';
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

    //初始化用户请求的参数
    public function initMCA()
    {
        //接收用户的需求，也就是地址栏的参数
        $m = isset($_GET['m']) ? $_GET['m'] : $GLOBALS['config']['default_module'];
        define('MODULE',$m);

        $c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['config']['default_controller'];
        define('CONTROLLER',$c);

        $a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['config']['default_action'];
        define('ACTION',$a);
    }
    //根据请求参数u，分发到控制器的方法中
    public function initDispatch()
    {
        //将其引导到目的地
        $controller_name = MODULE.'\\controller\\'.CONTROLLER.'Controller';

        //实例化控制器对象
        $controller = new $controller_name;

        //调用控制器的方法
        $a = ACTION;
        $controller -> $a();
    }
    //加载框架的配置文件
    public function loadFrameworkConfig()
    {
        $config_file = './framework/config/config.php';
        return require_once $config_file;
    }
    //加载公共的配置文件
    public function loadCommonConfig()
    {
        $config_file = './application/common/config/config.php';
        //公共的配置可能有，也可能没有
        if(file_exists($config_file)){
            return require_once $config_file;
        }else{
            return [];
        }
    }
    //加载项目具体模块的（home\admin）配置文件
    public function loadModuleConfig()
    {
        $config_file = './application/'.MODULE.'/config/config.php';
        //公共的配置可能有，也可能没有
        if(file_exists($config_file)){
            return require_once $config_file;
        }else{
            return [];
        }
    }
}