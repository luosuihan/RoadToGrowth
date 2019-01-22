<?php

//接收表单提交的用户名、密码
$user = $_POST['user'];
$pass = $_POST['pass'];

//暂时给定固定的合法用户就是 张三   admin123
if($user =='张三' && $pass == 'admin123'){
    //登录成功，给这个用户身上设置一个标记，这样只有登录成功才有这个变量
    session_start();
    $_SESSION['user'] = $user;

    header("Refresh:3;url=index.php");
    echo '登录成功';
    exit;
}else{
    header("Refresh:3;url=form.html");
    echo '登录失败';
    exit;
}