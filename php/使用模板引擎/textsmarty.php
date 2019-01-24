<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../js/bootstrap.css">
</head>
<body>
<?php
require_once 'smartyDemo.php';
require '../smarty-3.1.30/libs/Smarty.class.php';
$show = new showData();
$smarty = new Smarty();
$page_num = isset($_GET['page']) ? $_GET['page'] : 1;
$show ->page = $page_num;
$row = $show ->getreadfile("db.ini");
//echo $row.host;
$mysqli = new mysqli($row['host'],$row['user'],$row['pwd'],$row['dbname'],$row['port']);
if($mysqli->errno){
    die('数据库连接失败');
}
//smarty开启缓存 ---
$smarty -> caching = true;
$smarty -> setCacheDir("cache");
$smarty -> cache_lifetime = 60;
if(!$smarty ->isCached('smarty.html',$page_num)){

    //统计数据条数
    $sql = "select count(*) as 'goodstotal' from ecs_goods where shop_price != 0.00";
    $result1 = $mysqli ->query($sql);
    //echo
    if($result1){
        $row = $result1->fetch_assoc();
    }
    $show ->total = $row['goodstotal'];
    //LIMIT ($pageNow-1) * $pageSize , $pageSize;  $pageNow - 一页显示几条，$pageSize显示第几页
    $offset = ($page_num -1) * ($show->pageNum);
    //查询所有数据
    $sql1 = "select goods_id,goods_name,shop_price from ecs_goods where shop_price != 0.00 order by shop_price DESC  limit $offset, $show->pageNum ";
    $result = $mysqli ->query($sql1);
    $arr = array();
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
    $smarty->assign("arr",$arr);
}

$data = $show ->getData();
echo "显示页数".$page_num;
$smarty->display('smarty.html',$page_num);
echo $data;
?>
</body>
</html>