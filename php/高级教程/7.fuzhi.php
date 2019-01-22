<?php
class Person
{
    public $name = '金角大王';
}

$a = new Person();

$b = $a;    //将$a指向真实对象的指针拷贝一份给$b

$b -> name = '银角大王';

echo $a -> name;    //银角大王