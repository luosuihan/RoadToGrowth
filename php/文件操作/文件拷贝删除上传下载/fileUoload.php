<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 16:59
 *
 * array(5) {
["name"]=>"bs.png"
["type"]=>"image/png"
["tmp_name"]=>"C:\Windows\Temp\php4012.tmp"
["error"]=>int(0)
["size"]=>int(9636)
}
 *
 */
//echo $_FILES['pic']['tmp_name'];
//var_dump($_FILES['pic']);
/*uniqid() -- 生成唯一的字符串
 strrchr() -- 截取字符串*/
$file = 'img/';
if($_FILES['pic']['error'] != 0){
    die('文件上传错误'.$_FILES['pic']['error']);
}
//创建文件
$new_dir = date('Ymd');
if (!is_dir($file.$new_dir)){
    mkdir($file.$new_dir);
}
//文件名格式转换
$subName = iconv("UTF-8","gbk", $_FILES['pic']['name']);
//定义唯一文件名，避免重复
$rrename = uniqid('upload_',false);
//截取字符串
$sub = strrchr($subName,'.');

///对文件类型进行进行判断
$imgarry = ['image/png','image/jpg','image/jpeg','image/gif'];
if (!in_array($_FILES['pic']['type'],$imgarry)){
    die('小样儿，别瞎搞啊');
}
//对文件格式的详细判断
$fileformatinfo = new finfo(FILEINFO_MIME_TYPE);
$type  = $fileformatinfo ->file($_FILES['pic']['tmp_name']);
echo $type;
if (!in_array($type,$imgarry)){
    die('你以为脱了个马甲我就不认识尼玛');
}
echo '<br>'.$type;
if (move_uploaded_file($_FILES['pic']['tmp_name'],$file.$new_dir.'/'.$rrename.$sub)){
    echo '上传成功';
}else{
    echo '上传失败';
}