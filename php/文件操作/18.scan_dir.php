<?php
//在d盘要创建itbull目录
$dir = 'd:/itbull/';


if(is_dir($dir)){
    //遍历这个目录,先打开目录获得一个目录的句柄
    $dir_handle = opendir($dir);

    //从这个资源中读取子目录或者文件
    while($file = readdir($dir_handle)){
        echo $file.'<br>';
}

//关闭这个资源
closedir($dir_handle);
}else{
    echo '不是目录';
}