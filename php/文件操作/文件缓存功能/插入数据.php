<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 11:13
 */
$file = 'demo3.txt';
if (file_exists($file)){
    $headle = fopen($file,'r');
    $files = filesize($file);
    $filesize = 104;
    $fileconetxt = '';
    $mysqli = new mysqli('127.0.0.1','root','123456','demo3',3306);
    if ($mysqli -> errno){
        die('数据库连接失败');
    }
//    $sql = "";
    while (!feof($headle)){
        $fileconetxt .= fread($headle,$filesize);
        $sql = "insert into `filetext` VALUE ('$fileconetxt')";
        if ($mysqli->query($sql)){
            echo '数据插入成功';
        }
    }
    //写入到数据库

}