<?php
//递归统计目录的大小
function getDirSize($dir)
{
    if(is_dir($dir)){
        //打开这个目录
        $dir_handle = opendir($dir);
        static $size = 0;
        while(false !== ($file = readdir($dir_handle))){
            echo $file.'<br>';
            //先跳过.  ..
            if($file == '.' || $file == '..'){
                continue;
            }
            //如果读取的条目是文件，直接统计大小
            if(!is_dir($dir.'/'.$file)){
                $size += filesize($dir.'/'.$file);
            }else{
                getDirSize($dir.'/'.$file);
            }
            //否则继续遍历
            //echo $file.'<br>';
        }
    }else{
        $size = filesize($dir);
    }
    return $size;
}
$size = getDirSize('D:/code/04源代码');
echo $size;