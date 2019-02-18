<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/17
 * Time: 9:48
 */
namespace framework;
use \Smarty;
class Controller
{
    protected $smarty;
    public function __construct()
    {
        require_once 'smarty/libs/Smarty.class.php';
        $this ->smarty = new Smarty();
        $this ->smarty -> left_delimiter = '<{';
        $this ->smarty -> right_delimiter = '}>';
        $this ->smarty -> setTemplateDir('tld/');
        $this ->smarty -> setCompileDir('tld_c/');
    }
}