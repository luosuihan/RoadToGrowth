<?php

/**
 * 基础控制器，多个控制器之间的公共代码
 */
namespace framework\core;
use \Smarty;
class Controller
{
    protected $smarty;
    public function __construct()
    {
        $this -> initCharset();
        $this -> initTimezone();
        $this -> initSmarty();
    }
    //初始化smarty
    private function initSmarty()
    {
        //require_once './smarty/Smarty.class.php';
        $this -> smarty = new Smarty();
        $this -> smarty -> left_delimiter = '<{';
        $this -> smarty -> right_delimiter = '}>';
        $this -> smarty -> setTemplateDir('./application/'.MODULE.'/view/');
        $this -> smarty -> setCompileDir('tpls_c');
    }
    //设置编码
    public function initCharset()
    {
        header("Content-type:text/html;charset=utf-8");
    }
    //设置时区
    public function initTimezone()
    {
        date_default_timezone_set('PRC');
    }
}