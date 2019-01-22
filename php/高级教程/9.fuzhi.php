<?php
class Person
{
    public $name = '金角大王';
}

$a = new Person();

$b = $a;    // 值传递，将$a指向真实数据的指针拷贝一份
$b = &$a;   // 引用传递，两个变量指向同一块地址，有任何一方放生变化，另一方也会跟着变化

$a = 'abc';

echo $b;