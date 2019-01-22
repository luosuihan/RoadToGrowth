<?php
//date_default_timezone_set('PRC'); //设置时区
//error_reporting(0);
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/9
 * Time: 10:57
 */
class DaoMySQL
{
    public $host;
    public $user;
    public $pwd;
    public $dbName;
    public $prot;
    //public $character;
    public $mysqli;
    private static $singleton = null;
    public $myproperty;
    private function __construct($myproperty)
    {
        $this -> host = $myproperty["host"];
        $this -> user = $myproperty["user"];
        $this -> pwd = $myproperty["pwd"];
        $this -> dbName = $myproperty["dbname"];
        $this -> prot = $myproperty["port"];
        //调用连接数据库函数
        $this ->connect();
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //单例模式
   public static function getSingleton($myproperty){
        if(self::$singleton == null){
            self::$singleton = new self($myproperty);
        }
        return self::$singleton;
    }
    //连接数据库
    private function connect()
    {
        $this ->mysqli = new mysqli($this -> host,$this -> user,$this -> pwd,$this -> dbName,$this -> prot);
    }
    public function __destruct()
    {
        //关闭数据库连接
        $this ->mysqli->close();
    }
}