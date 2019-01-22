<?php
/**
 * 图像验证码了类
 */
class Captcha
{
    //验证码的宽度
    private $width = 100;
    //验证码的高度
    private $height = 40;
    //验证码字体文件
    private $font = './fonts/STHUPO.TTF';
    //验证码字体大小
    private $size = 18;
    //验证码字符个数
    private $number = 4;

    public function __set($name, $value)
    {
        if(property_exists($this,$name)){
            $this -> $name = $value;
        }
    }
    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this -> $name;
        }
    }

    //开始绘制验证码图像
    public function makeImage()
    {
        //1. 先创建一个背景图片，颜色随机变化的
        $image = imagecreatetruecolor($this -> width,$this->height);
        //填充颜色
        $color = imagecolorallocate($image,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
        imagefill($image,0,0,$color);

        //2. 调用makeCode方法，给我返回随机的字符串
        $code = $this -> makeCode();
        $color = imagecolorallocate($image,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));

        //遍历字符串，拿到每一个字符，然后一个一个的写入
        for($i=0;$i<strlen($code);$i++){
            $x = ($this -> width) / ($this -> number) * $i + 10;
            imagettftext($image,$this->size,mt_rand(-30,30),$x,30,$color,$this->font,$code[$i]);
        }

        //输出到浏览器
        header("Content-Type:image/png");
        imagepng($image);

        //销毁图像资源
        imagedestroy($image);
    }
    //随机生成字符（数字、字母）
    private function makeCode()
    {
        //1. 先创建随机的数字
        $number = range(3,9);  //忽略0 1 2 和 字母 o l  z不容易区分
        //2. 创建随机的字母
        $lower = range('a','z');
        //3. 创建随机的大写字母
        $upper = range('A','Z');

        $arr = array_merge($number,$lower,$upper);

        //打乱数组的顺序
        shuffle($arr);

        //返回指定个数的字符个数
        $str = '';
        for($i=0;$i<$this->number;$i++){
            $str .= $arr[$i];
        }
        return $str;
    }
}