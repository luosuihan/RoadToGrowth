<?php
//curd  crud： create read  update  delete，表示增删改查
//增加一个session数据
session_start();
//$_SESSION['sex'] = 'male';
//echo '<pre>';
//var_dump($_SESSION);

//删除文件中的某一个数据
unset($_SESSION['name']);

//删除session文件
session_destroy();