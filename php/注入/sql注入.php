<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/19
 * Time: 9:03
 *          1' or 1=1 or '
 */
//isset()
$user = $_POST['user'];

//$pass = md5($_POST['pwd']);
$pass = $_POST['pwd'];
//echo $user.'  ----  '.$pass;
$connect = new mysqli('127.0.0.1','root','123456','demo3',3306);
if($connect -> errno){
    die('连接失败'.$connect -> error);
}
$sql = "select stuname,stupwd from `stu` WHERE stuname = '$user' and stupwd = '$pass'";
//$res = mysqli_query($connect,$sql);
$res = $connect -> query($sql);
if ($user1 = $res -> fetch_assoc()){
    echo '登录成功';
    //var_dump($user1);
}else{
    echo '登录失败';
}