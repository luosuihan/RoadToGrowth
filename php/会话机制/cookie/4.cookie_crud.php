<?php
//增加一个cookie数据
//setcookie('book','xiao ao jiang hu',time()+3600);
//删除cookie,告诉浏览器cookie失效了，浏览器就会自动删除cookie文件
//setcookie('book','',time() - 1);

//每次请求时，随身携带cookie文件，服务器就会接受文件的内容并初始化到内存中，
//所以删除内存中的$_COOKIE里面的数据
//unset($_COOKIE['book']);

//修改cookie的内容
//setcookie('book','tianlongbabu',time()+3600);

echo '<pre>';
var_dump($_COOKIE);