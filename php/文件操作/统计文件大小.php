<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 14:36
 * C:\Users\m1762\Desktop\AMap_Android_SDK_All\AMap2DMap_DemoDocs\AMap_Android_API_2DMap_Demo\AMap2DDemo\app\src\main
 */
function getFileSize($filePath){
    echo $filePath.'<br>';
    if (is_dir($filePath)){
        //$fileDir = opendir($filePath);
        $fileDir = opendir($filePath);
        static $size = 0;
        while (false !== ($file = readdir($fileDir))){
            //目录下.或.. 直接跳过
            if($file == '.' || $file == '..'){
                continue;
            }
            if(!is_dir($filePath.'/'.$file)){
                $size += filesize($filePath.'/'.$file);

            }else{
                getFileSize($filePath.'/'.$file);
            }
        }
        return $size;
    }else{
        $size = filesize($filePath);
    }

}
 $size = getFileSize('D:/code/04源代码');
echo $size;
