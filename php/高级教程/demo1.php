<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 9:31
 */
/*class Cat{
    public $name = "zhag";
    public function eat(){
        echo "来点";
    }
}
$cat = new Cat;
//$cat ->name = "fdsaf";
//echo '<pre>';
//var_dump($cat ->name);
$cat ->eat();*/
class Person{
    public $name1 = "好嗨哟";
}
$person = new Person();
$p = $person;
$p ->name1 = "感觉人生到达了巅峰";
echo $p->name1;