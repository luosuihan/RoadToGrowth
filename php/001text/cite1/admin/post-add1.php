
<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/3/10
 * Time: 18:45
 */
require_once '../functions.php';
//标题
$title = $_POST['title'];
//内容
$content = $_POST['content'];
//别名
$slug = $_POST['slug'];
//图片
$feature = $_POST['feature'];
//所属分类
$category = $_POST['category'];
//发布时间
$created = $_POST['created'];
//状态
$status = $_POST['status'];


/*$file = 'img/';
if($_FILES['feature']['error'] != 0){
    die('文件上传错误'.$_FILES['feature']['error']);
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
if (!in_array($_FILES['feature']['type'],$imgarry)){
    die('小样儿，别瞎搞啊');
}
//对文件格式的详细判断
$fileformatinfo = new finfo(FILEINFO_MIME_TYPE);
$type  = $fileformatinfo ->file($_FILES['feature']['tmp_name']);
echo $type;
if (!in_array($type,$imgarry)){
    die('你以为脱了个马甲我就不认识尼玛');
}
echo '<br>'.$file.$new_dir.'/'.$rrename.$sub.'<br>';  //吧这个地址存到数据库表中
if (move_uploaded_file($_FILES['feature']['tmp_name'],$file.$new_dir.'/'.$rrename.$sub)){
    echo '上传成功';
}else{
    echo '上传失败';
}*/


//echo $sr;
/*$conn = mysqli_connect(XIU_DB_HOST, XIU_DB_USER, XIU_DB_PASS, XIU_DB_NAME);
if (!$conn) {
    exit('连接失败');
}*/
//categories  状态
/*$sql1 = "INSERT into `categories`(id,'name') VALUE (NULL ,'哈哈哈哈')";
//内容标题
$sql2 = "INSERT into `categories` VALUE (5,'zhsfd','哈哈哈哈')";
//时间名字
$sql3 = "INSERT into `categories` VALUE (5,'zhsfd','哈哈哈哈')";
xiu_execute($sql);*/
/*xiu_execute($sq2);
xiu_execute($sq3);*/
