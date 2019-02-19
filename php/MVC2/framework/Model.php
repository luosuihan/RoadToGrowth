<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 14:35
 */
namespace framework;
use framework\util\Util;
use framework\dao\DAO;
class Model
{
    protected $dao;
    public function __construct()
    {
//        echo 'Model'.'<br>';
//        require_once 'dao/DAO.php';
//        require_once 'util/Util.php';
//        $property = Util::getINIflie("../config/db.ini");
//        $property = Util::getINIflie("../../../config/db.ini");
        $option = [
            'host'      =>  '127.0.0.1',
            'user'      =>  'root',
            'pwd'      =>  '123456',
            'dbname'    =>  'ecshop',
            'port'      =>  3306,
        ];
//        var_dump($option);
       /* $option = $this ->loadFrameworkConfig();
        var_dump($option);*/
        $option1 = $this ->loadFrameworkConfig1();
//        $this ->loadFrameworkConfig1();
        var_dump($option1);
//        die;
        $this ->dao = DAO::getSingle($option);
    }
    public function loadFrameworkConfig1()
    {
//        echo 'loadFrameworkConfig1';
        $config_file = './framework/config/config.php';
        echo $config_file;
        return require_once $config_file;
    }
}