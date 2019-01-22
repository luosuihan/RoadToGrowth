<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 12:08
 */
class cat{
    public $name;
    public $age;
    function __construct($name,$age){
        $this ->name = $name;
        $this ->age = $age;
        echo '<pre>';
        var_dump($this);
    }
}
$c = new cat("王五",187);