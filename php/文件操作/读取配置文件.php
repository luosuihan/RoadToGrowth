<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 10:44
 */
$fileName = 'myssql.ini';
if (file_exists($fileName)){
//    $hd = fopen($fileName,'r');
    $pif = parse_ini_file($fileName);
    echo '<pre>';
    var_dump($pif);
}else{
    echo 'NO';
}
