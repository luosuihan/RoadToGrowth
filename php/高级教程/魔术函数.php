<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 14:24
 */
class Cat{
    public $name = "翠花";
    private $weight = "50kg";
    function __get($name)
    {
        // TODO: Implement __get() method.
        return $this -> $name;
    }
}
$cat = new Cat();
echo $cat -> weight;