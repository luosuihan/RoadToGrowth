<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 14:32
 */
class Car{
    private $price = "100w";
    private $brand;
    private $speed;
    private $carOwner;
    public function __get($name){
        //echo "get";
        if(property_exists($this,$name)){
            return $this -> $name;
        }else{
            return $this."访问的属性不存在";
        }
    }
    public function __set($name, $value){
        //echo "set";
        if (property_exists($this,$name)){
            echo "set";
            $this -> $name = $value;
        }else{
            echo "属性不存在";
        }
    }
}
$car = new Car();
$car -> price = "500qw";
echo $car -> price;