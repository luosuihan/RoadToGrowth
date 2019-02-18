<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 14:35
 */
namespace framework;
use framework\dao\DAO;
class Model
{
    protected $dao;
    public function __construct()
    {
//        require_once 'dao/DAO.php';
//        require_once 'util/Util.php';
//        $property = Util::getINIflie("../config/db.ini");
        $property = Util::getINIflie("../../../config/db.ini");
//        var_dump($property);
        $this ->dao = DAO::getSingle($property);
    }
}