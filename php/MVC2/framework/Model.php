<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 14:35
 */
class Model
{
    protected $dao;
    public function __construct()
    {
        require_once 'dao/DAO.php';
        require_once '../util/Util.php';
        $property = Util::getINIflie("../config/db.ini");
        $this ->dao = DAO::getSingle($property);
    }
}