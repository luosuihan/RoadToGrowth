<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 14:54
 */
//namespace home\model;
//use framework\dao\MVCDAO;
namespace framework\core;
use framework\dao\MVCDAO;
class Model
{
    protected $dao;
    public function __construct()
    {
//        require_once "../../../framework/dao/MVCDAO.php";
        $this -> dao = MVCDAO::getSingle();
    }
}