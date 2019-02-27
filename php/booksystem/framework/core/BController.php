<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/27
 * Time: 10:18
 */
namespace framework\core;
use \Smarty;
class BController
{
    protected $smarty;
    public function __construct()
    {
        $this ->smarty = new Smarty();
        $this ->smarty ->left_delimiter = $GLOBALS['config']['left_delimiter'];
        $this ->smarty ->right_delimiter = $GLOBALS['config']['right_delimiter'];
        $this ->smarty -> setTemplateDir(BAPP.'view/');
//        $this ->smarty -> setCompileDir(BROOT.'public/tpls_c/');//缓存文件
    }
}