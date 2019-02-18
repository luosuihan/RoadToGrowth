<?php
namespace framework\core;
use framework\dao\DAOPDO;
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
            'dbname'    =>  'ecshop',
            'port'      =>  3306,
            'charset'   =>  'utf8',
        ];
        $this -> dao = DAOPDO::getSingleton($option);
    }
}