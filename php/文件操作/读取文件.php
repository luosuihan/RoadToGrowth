<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 10:11
 */
$file = 'demo3.txt';
$handle = fopen($file,'r+');
$filesize = filesize($file);

$fread = fread($handle,$filesize);
$con = '';
fwrite($handle,'hele');
fclose($handle);
//var_dump($fread);
