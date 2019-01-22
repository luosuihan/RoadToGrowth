<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 10:25
 */
$file = 'demo3.txt';
if(file_exists($file)){
    $headle = fopen($file,'r');
    $fsize = filesize($file);
    $fmaxsize = 512;
    $fileconnect = '';
//    $frd = fread($headle,$fsize);
    while (!feof($headle)){
        $fileconnect .= fread($headle,$fsize);
    }
    echo $fileconnect;
    fclose($headle);
}else{
    echo '文件不存在';
}