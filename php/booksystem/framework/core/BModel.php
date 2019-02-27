<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 15:34
 */
namespace framework\core;
use framework\dao\BookDAO;
class BModel
{
    protected $bdao;
    public function __construct()
    {
        //连接数据库
        $this ->bdao = BookDAO::getSingle($GLOBALS['config']);
    }
}