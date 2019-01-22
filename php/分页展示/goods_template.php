<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        th{
            padding: 0 10px;
        }
        td{
            padding: 0 10px;
        }
    </style>
</head>
<body style="margin:20px;">
<form action="textPage.php" method="post">
    <input type="text" name="keyword" placeholder="请输入关键字" value="<?php echo $keyword;?>">
    <input type="submit" value="搜索">
</form>
<table>
    <tr>
        <th>商品序号</th>
        <th>商品名称</th>
        <th>商品价格</th>
    </tr>
    <?php foreach ($goods as $v):?>
        <tr>
            <td><?php echo $v['goods_id'];?></td>
            <td><?php echo $v['goods_name'];?></td>
            <td><?php echo $v['goods_price'];?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>