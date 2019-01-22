<?php
//先判断是否是第一次访问
setcookie('login_time',time(),time()+3600);
if(!isset($_COOKIE['login_time'])){
    //没有cookie说明，是第一次访问
    echo '您是第一次访问，访问时间是:'.date('Y-m-d H:i:s',time());
}else{
    //有cookie，说明不是第一次访问
    //读取cookie里面保存的时间
    echo '您上次登录的时间为:'.date('Y-m-d H:i:s',$_COOKIE['login_time']);
}
