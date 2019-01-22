<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/9
 * Time: 9:54
 */
class Cat{
    public static $count = 0;
    public  $count1 = 1110;
    public static function catchMouse(){
        echo "xiao";
//        $this ->count1;
        echo self::$count;
    }
    public function skill(){
        Cat::catchMouse();
        //this:self::catchMouse();
    }
}
$cat = new Cat();
$cat ->skill();