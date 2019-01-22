<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Refresh:2;url=form.html");
    echo '非法访问，小心我告你';
    exit;
}
echo '后台首页';