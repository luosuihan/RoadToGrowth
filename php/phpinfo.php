<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/5
 * Time: 14:55
 */
/*phpinfo();
date_default_timezone_set("PRC");*/
header("Content-type: text/html; charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "phpdemo";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//mysqli_query("set names 'utf8'");
$conn->set_charset('utf8');
$sql = "INSERT INTO student (stuid, stuName, stuachievement)
VALUES (1, '王五', '83')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>