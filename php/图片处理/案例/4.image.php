<?php
//1. 创建图片资源，也就是将图片加载到内存中
//参数：文件的名字，如果文件是png格式就使用imagecreatefrompng、
$src_image = imagecreatefrompng('web.png');
$src_w = imagesx($src_image);
$src_h = imagesy($src_image);

//2. 创建图像资源（在内存中创建一块画布）
$image = imagecreatetruecolor($src_w,$src_h);

//3. 将图片拷贝到画布中
//参数1：目标图像资源
//参数2：待拷贝的图像资源
//参数3、4：目标画布的坐标，通常是0,0
//参数5、6：待拷贝的图像的坐标：通常是0,0
//参数7、8：待拷贝图像的宽度、高度
imagecopy($image,$src_image,0,0,0,0,$src_w,$src_h);

//将图像资源输出到浏览器
header("Content-Type:image/png");
//将图像资源输出到浏览器
imagepng($image);

//销毁内存中的图像资源
imagedestroy($image);