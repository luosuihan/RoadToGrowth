<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 10:49
 */
class Cat{
    public $name = "hahh";
    public $name1 ;
    function eat(){
        echo '<pre>';
        var_dump($this);
    }
}
$cat = new Cat;
$cat ->name1 = ["heng"=>"好嗨哟"];
$cat ->name1["heng"];
/*echo '<pre>';
var_dump($this);*/
$cat ->eat();