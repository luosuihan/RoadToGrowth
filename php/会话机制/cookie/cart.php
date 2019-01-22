<?php
$goods = '航空母舰模型';
$count = 10;
$price = 1000;

//将上面的变量保存到浏览器
setcookie('name',$goods,time()+3600);
setcookie('count',$count,time()+3600);
setcookie('price',$price,time()+3600);
