<?php
require_once 'DaoMySQLi.class.php';

$obj1 = DaoMySQLi::getSingleton();   //new MysqlI
/*$obj2 = DaoMySQLi::getSingleton();  //new MySQLI
$obj3 = DaoMySQLi::getSingleton();*/

echo '<pre>';
var_dump($obj1);
var_dump($obj2);
var_dump($obj3);