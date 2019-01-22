<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/9
 * Time: 15:33
 */
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "demo1";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "INSERT INTO stu VALUES (4,'张三发哈哈哈')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>