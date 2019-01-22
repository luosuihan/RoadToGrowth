<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/9
 * Time: 16:14
 */
class Cat{
    public function sum($num1,$num2){
        return $num1 + $num2;
    }
    public function ride($num1,$num2,$num3){
        return $num1 * $num2 * $num3;
    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if ($name == 'getResult'){
            if(count($arguments) == 2){
                return $this -> sum($arguments[0],$arguments[1]);
            }else{
                return $this -> ride($arguments[0],$arguments[1],$arguments[2]);
            }
        }else{
            echo "函数不存在";
        }
    }
}
$cat = new Cat();
$sum1 = $cat -> getResult(20,10);
echo $sum1."和".'</br>';
$ss = $cat -> getResult(20,10,3);
echo $ss."乘";