<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/21
 * Time: 16:11
 */
class checkCode
{
    public $number = 4;
    function imgCode(){
        //1. 创建图像资源（在内存中创建一块画布）
        $image = imagecreatetruecolor(100,40);

        //2. 创建一个颜色填充到画布
        $color = imagecolorallocate($image,255,255,255);
        imagefill($image,0,0,$color);
        //3. 绘制一个形状
        $color = imagecolorallocate($image,255,0,0);
//        $line = imageline($image,0,0,300,300,$color);
        imagefill($image,0,0,$color);
        imagerectangle($image,0,0,99,39,$color);
        //将图像资源输出到浏览器
        header("Content-Type:image/png");
        //将图像资源输出到浏览器
        imagepng($image);
        //销毁内存中的图像资源
        imagedestroy($image);
//        mt_rand()
    }
    //随机字体
    private function getRandFonts(){
        $num = range(3,9);
        $lower = range('a','z');
        $upper = range('A','Z');
        $arr = array_merge($num,$lower,$upper);
        shuffle($arr);
        $str = '';
        for($i=0;$i<$this->number;$i++){
            $str .= $arr[$i];
        }
        return $str;
    }
}