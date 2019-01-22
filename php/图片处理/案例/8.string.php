<?php
$str = 'helloworld';
//如何遍历这个字符串呢？
//每个字符都有自己的索引位置
//echo $str[5];     // w

for($i=0;$i<strlen($str);$i++){
    echo $str[$i].'<br>';
}