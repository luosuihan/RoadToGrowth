<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/25
 * Time: 15:10
 */
class Model
{
    protected $dao;
    public function __construct()
    {
        require_once 'dao/DAO.php';
        $property = $this ->getINI("../config/db.ini");
        $this->dao = DAO::getSingleton($property);
    }
    private function getINI($path){
        if (file_exists($path)){
            $dbini = parse_ini_file($path,false);
        }
        return $dbini;
    }
}