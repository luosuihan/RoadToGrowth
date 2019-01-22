<?php
//在d盘要创建itbull目录
$date = date('Ymd');

$dir = 'd:/itbull/demo/'.$date;

//先判断一下目录是否存在
if(!is_dir($dir)){
    //不存在，则创建这个目录
    if(mkdir($dir,0777,true)){
        echo '创建目录成功';
    }else{
        echo '创建目录失败';
    }
}else{
    echo '目录已存在，不用创建';
}
