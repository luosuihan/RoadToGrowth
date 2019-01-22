<?php
//1. 创建图像资源（在内存中创建一块画布）
$image = imagecreatetruecolor(300,300);

//2. 创建一个颜色填充到画布
$color = imagecolorallocate($image,0,148,85);
imagefill($image,0,0,$color);

//3. 绘制一个弧形
$color = imagecolorallocate($image,255,0,0);
//参数1：画布、图像资源
//参数2、3：圆心的坐标x、y
//参数4、5：圆的宽度、高度
//参数6、7：开始和结束的角度：3点钟的位置是0度；
//参数8：颜色
imagearc($image,150,150,50,50,0,180,$color);


//将图像资源输出到浏览器
header("Content-Type:image/png");
//将图像资源输出到浏览器
imagepng($image);

//销毁内存中的图像资源
imagedestroy($image);