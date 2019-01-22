<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/5
 * Time: 10:42
 */
$con = file_get_contents('names.txt');
$line = explode("\n",$con);
//var_dump($line);
$data = array();
foreach ($line as $item){
    if (!$item){
//        break;
        continue;
    }
    $data[] = explode('|', $item);
}
/*echo '<pre>';
var_dump($data);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学员信息</title>
</head>
<body>
<table>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>邮箱</th>
        <th>网址</th>
    </tr>
    <?php foreach ($data as $line): ?>
        <tr>
            <?php foreach ($line as $col): ?>
                <!-- $col => ' http://XEP.VC' -->
                <?php $col = trim($col); ?>
                <!-- $col => 'http://XEP.VC' -->
                <!-- 判断这里的数据是不是一个网址（看看是否是 http://） -->
                <?php if (strpos($col, 'http://') === 0): ?>
                    <td><a href="<?php echo strtolower($col); ?>"><?php echo substr($col, 7); ?></a></td>
                <?php else: ?>
                    <td><?php echo $col; ?></td>
                <?php endif ?>
            <?php endforeach ?>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>
