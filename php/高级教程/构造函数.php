<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/8
 * Time: 11:05
 */
class BaseClass {
    function __construct() {
        print "<br>In BaseClass constructor</br>";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "<br>In SubClass constructor</br>";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
//$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
//$obj = new OtherSubClass();