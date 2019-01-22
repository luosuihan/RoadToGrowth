<?php
//该cookie会在/0830/cookie路径下都起作用
echo 'he;llo';
setcookie('name','lisi',time()+3600,'/0830/cookie','',false,true);