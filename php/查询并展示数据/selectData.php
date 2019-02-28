<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/18
 * Time: 10:12
 */
require_once 'DaoMysql.php';
#$mysqli = new mysqli('localhost','root','123456','demo3',3306);
//$mysqli = new DaoMysql('localhost','root','123456','demo3',3306);
$property = array(
    "host"=>"127.0.0.1",
    "user"=>"root",
    "pwd"=>"123456",
    "dbname"=>"demo3",
    "port"=>3306
);
$mysqli = DaoMysql::getSingle($property);
/*echo '<pre>';
var_dump($mysqli);*/
/*if($mysqli ->connect_errno){
    die('数据库连接失败'.connect_error);
}*/

$sql = "select * from emp";
$res = mysqli_query($mysqli,$sql);
//查询数据
//$res = $mysqli ->fetchAll($sql);
$employee_list = array();
for($i = 0;$i<count($res);$i++){
    $employee_list[] = $res[$i];
}
//插入数据
/*$sql1 = "insert into  `emp` VALUES (9043,'张三','android','7698','2012-01-02','1600','300','30'),
(9043,'李四','android','7698','2012-01-02','1600','300','30'),
(9043,'王五','android','7698','2012-01-02','1600','300','30'),
(9043,'小黑','android','7698','2012-01-02','1600','300','30')";
$sql2 = "delete from `emp` where ename='张三'";
$res = $mysqli ->addData($sql1);*/
/*while ($row = mysqli_fetch_assoc($res)){
    $employee_list[] = $row;
}*/
require 'showData.html';