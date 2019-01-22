<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/9
 * Time: 13:56
 */
//require_once "DaoMySQL.php";
function automaticLoading($className){
    $classNameFile = $className.".php";
    require_once $classNameFile;
}
spl_autoload_register("automaticLoading",true,true);
$myproperty = array(
    "host"=>"127.0.0.1",
     "user"=>"root",
     "pwd"=>"123456",
    "dbname"=>"demo1",
    "port"=>3306
);
$obj1 = DaoMySQL::getSingleton($myproperty);

/*echo '<pre>';
var_dump($obj1);*/