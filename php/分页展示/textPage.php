<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试page页</title>
    <link rel="stylesheet" href="../js/bootstrap.css">
</head>
<body>
<?php
//获取 用户输入的数据
//keyword
$keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : '';
echo '--- '.$keyword;
$where = '';
if ($keyword != '') {
    $where = " where goods_name like '%$keyword%'";
}
require_once 'page.php';
$textp = new page();
$textp->keyword = $keyword;
$page_num = isset($_GET['page']) ? $_GET['page'] : 1;
$textp->page = $page_num;
//$textp ->url = 1;
$textp->page = $page_num;
$tx = $textp->getMysqlIni('msproperty.ini');
//$tx->
$textp->host = $tx['host'];
$textp->user = $tx['user'];
$textp->pwd = $tx['pwd'];
$textp->dbname = $tx['dbname'];
$textp->port = $tx['port'];

$connect = new mysqli($tx['host'], $tx['user'], $tx['pwd'], $tx['dbname'], $tx['port']);
if ($connect->errno) {
    die('数据库连接失败');
}
//获取数据中的所有内容
$sql = "select count(*) as 'total_num' from ecs_order_goods $where";
$result = $connect->query($sql);
if ($result) {
    $row = $result->fetch_assoc();
    //先把结果集释放
    //$result -> free();
}
$textp->total_page = $row['total_num'];
//分页类的每页显示的记录数
$textp->page_nem = 3;
$offset = ($page_num - 1) * ($textp->page_nem);
$sql1 = "SELECT * FROM `ecs_order_goods` $where LIMIT $offset,$textp->page_nem";
//$goods
$showres = $connect->query($sql1);
$goods = array();
while ($showrow = mysqli_fetch_assoc($showres)) {
    $goods[] = $showrow;
}
//数据模板
require_once 'goods_template.php';
echo $textp->showPage();
$connect->close();
?>
</body>
</html>