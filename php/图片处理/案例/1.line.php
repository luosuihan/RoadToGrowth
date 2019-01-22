<?php
//1. 创建图像资源（在内存中创建一块画布）
$image = imagecreatetruecolor(300,300);

//2. 创建一个颜色填充到画布
$color = imagecolorallocate($image,0,148,85);
imagefill($image,0,0,$color);

//3. 绘制一个线条
$color = imagecolorallocate($image,255,0,0);
$line = imageline($image,0,0,300,300,$color);


//将图像资源输出到浏览器
header("Content-Type:image/png");
//将图像资源输出到浏览器
imagepng($image);

//销毁内存中的图像资源
imagedestroy($image);