<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/18
 * Time: 10:51
 * 采用单例模式封装数据库
 * $mysqli = new mysqli('localhost','root','123456','demo3',3306);
 */
class DaoMysql
{
    public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;
    public static $mysqli;
    private static $single = null;
    public $property;
    private function __construct($property)
    {
       /* $this ->host = $host;
        $this ->user = $user;
        $this ->pwd = $pwd;
        $this ->dbname = $dbname;
        $this ->port = $port;*/
        $this ->host = $property['host'];
        $this ->user = $property['user'];
        $this ->pwd = $property['pwd'];
        $this ->dbname = $property['dbname'];
        $this ->port = $property['port'];
        $this -> connectmysql();
       if($this ->mysqli ->connect_error){
            die('fail '.$this ->mysqli ->connect_error);
        }
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function connectmysql()
    {
        $this ->mysqli = new mysqli($this ->host,$this ->user,$this ->pwd,$this ->dbname,$this ->port);
    }
    public static function  getSingle($property)
    {
        if (self::$single == null){
            self::$single = new self($property);
        }
        return self::$single;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this ->mysqli ->close();
    }
    //增加  删除  修改
    public function addData($sql)
    {
        $result = $this ->mysqli->query($sql);
        if($result){
            $afrow = $this->mysqli ->affected_rows;
            echo '语法ok - '.$afrow;
            if($afrow>0){
                //执行成功并影响到数据库
                return true;
            }else{
                //执行成功没有影响到数据库
                return false;
            }
        }else{
            echo '语法错误sss -';
            exit();
        }
    }

    //查询
    public function fetchOne($sql)
    {
        $result = $this -> mysqli ->query($sql);
        if($result){
            $row = $result -> fetch_assoc();

            //先把结果集释放
            $result -> free();
            return $row;
        }else{
            echo '语法错误';
            exit();
        }
    }
    public function fetchAll($sql)
    {
        $result = $this -> mysqli ->query($sql);
        if ($result){
            $arr = [];
            while ($row = $result -> fetch_assoc()){
                $arr[] = $row;
            }
            $result -> free();
            return $arr;
        }else{
            echo '语法错误';
            exit();
        }
    }
}