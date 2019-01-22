<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 14:32
 */
class Car{
    private $price;
    private $brand;
    private $speed;
    private $carOwner;
    public function __get($name){
        if(property_exists($this,$name)){
            return $this -> $name;
        }else{
            return $this."访问的属性不存在";
        }
    }
    public function __set($name, $value){
        if (property_exists($this,$name)){
            $this -> $name = $value;
        }else{
            echo "属性不存在";
        }
    }
}
$car = new Car();
$car -> price = "500qw";
$car -> brand = "三轮";
$car -> speed = "50kg/h";
$car -> carOwner = "张三";

echo $car -> price.'</br>';
echo $car -> brand.'</br>';
echo $car -> speed.'</br>';
echo $car -> carOwner.'</br>';