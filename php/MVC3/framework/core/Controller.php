<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 16:47
 */
namespace framework\core;
use \Smarty;
class Controller
{
    protected $smarty;
    public function __construct()
    {
        //require_once '../../../framework/vendor/smarty/Smarty.class.php';
        $this ->smarty = new Smarty();
        $this ->smarty ->left_delimiter = "<{";
        $this ->smarty ->right_delimiter = "}>";
        $this ->smarty -> setTemplateDir(APPLICATION.MODEL.'/view/');
        $this ->smarty -> setCompileDir(APPLICATION.'public/'.'tpls_c/');//缓存文件
    }
}