<?php
namespace framework\core;
use framework\dao\DAOPDO;
/**
 * 基础模型类，封装的是多个模型之间公共的代码
 */
class Model
{
    protected $dao;
    
    public function __construct()
    {
        //require_once 'dao/DAOPDO.class.php';
        $option = [
            'host'      =>  'localhost',
            'user'      =>  'root',
            'pass'      =>  '123456',
            'dbname'    =>  'ecs_goods',
            'port'      =>  3306,
            'charset'   =>  'utf8',
        ];
        $this -> dao = DAOPDO::getSingleton($option);
    }
}