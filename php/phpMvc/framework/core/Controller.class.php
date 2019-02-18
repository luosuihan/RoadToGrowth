<?php
namespace framework\core;
use \Smarty;
/**
 * 基础控制器类，将多个控制器之间通用的代码提取出来
 */
class Controller
{
    protected $smarty;
    public function __construct()
    {
        require_once 'smarty/Smarty.class.php';
        $this -> smarty = new Smarty();
        $this -> smarty -> left_delimiter = '<{';
        $this -> smarty -> right_delimiter = '}>';
        $this -> smarty -> setTemplateDir('tpl/');
        $this -> smarty -> setCompileDir('tpl_c/');
    }
}