<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/25
 * Time: 13:07
 */
function getINI($path){
    if (file_exists($path)){
        $dbini = parse_ini_file($path,false);
    }
    return $dbini;
}
//require_once 'DAO.php';
//$property = getINI("../../config/db.ini");
//$obj1 = DAO::getSingleton($property);
//查询数据
/*$sql = "select goods_name from ecs_goods";
$row = $obj1 ->selectAll($sql);*/
//插入
/*$sql = "insert into `text2`(tn) VALUE ('王五')";
$ss = $obj1 ->myQuery($sql);*/
require_once 'usermodel.php';
$um = new UserModel();
$um ->addUser();
