<?php
//1. 创建图像资源（在内存中创建一块画布）
$image = imagecreatetruecolor(300,300);

//2. 创建一个颜色填充到画布
$color = imagecolorallocate($image,0,148,85);
imagefill($image,0,0,$color);

//3. 绘制矩形
//参数1：图像资源
//参数2、3：起点的坐标
//参数4、5：终点的坐标
//参数6：颜色
$color = imagecolorallocate($image,255,0,0);
//imagerectangle($image,50,50,250,150,$color);    //描边
imagefilledrectangle($image,50,50,250,150,$color); //填充、实心

//将图像资源输出到浏览器
header("Content-Type:image/png");
//将图像资源输出到浏览器
imagepng($image);

//销毁内存中的图像资源
imagedestroy($image);