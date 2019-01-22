<?php
//在d盘要创建itbull目录
$date = date('Ymd');

$dir = 'd:/itbull/demo/'.$date;

//先判断一下目录是否存在
if(is_dir($dir)){
    if(rmdir($dir)){
        echo '删除成功';
    }else{
        echo '删除失败';
    }
}