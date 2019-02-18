<?php

/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 12:52
 * dsc : 封装数据库访问类
 */
namespace framework\dao;
class DAO
{
    public $host;
    public $user;
    public $pwd;
    public $db;
    public $port;
    public $mysqli;
    public static $single;
    private function __construct($property)
    {
        echo "<pre>";
        var_dump($property);
        $this -> host = $property['host'];
        $this -> user = $property['user'];
        $this -> pwd = $property['pwd'];
        $this -> db = $property['dbname'];
        $this -> port = $property['port'];
        //连接数据库
        $this -> connectdb($this -> host,$this -> user,$this -> pwd,$this -> db,$this -> port);
    }
    //防止克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function connectdb($host,$user,$pwd,$db,$port)
    {
        $this->mysqli = new mysqli($host,$user,$pwd,$db,$port);
        if($this -> mysqli ->errno){
            die("数据库连接失败:".$this -> mysqli ->error);
        }
    }
    public static function getSingle($property)
    {
        //echo "getSingle(.....)";
        if(self::$single == null){
            self::$single = new DAO($property);
        }
        return self::$single;
    }
    //关闭数据库连接
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->mysqli -> close();
    }
    //单条数据查询
    public function selectOne($sql){
        $result = $this->mysqli -> query($sql);
        if($result){
            $row = $result -> fetch_assoc();
            $result -> free();
            return $row;
        }else{
            echo '数据库插入失败';
            exit();
        }
    }
    //多条数据查询
    public function selectAll($sql){
        $result = $this->mysqli->query($sql);
        if ($result){
            $arr = [];
            while ($row = $result -> fetch_assoc()){
                $arr[] = $row;
            }
            $result -> free();
            return $arr;
        }else{
            echo '数据库插入失败';
            exit();
        }

    }
    //增，删，改
    public function query($sql){
        $result = $this->mysqli->query($sql);
        if($result){
            $affected_rows = $this->mysql->affected_rows;
            if($affected_rows > 0){
                //sql语句执行成功
                return true;
            }else{
                //sql语句执行失败
                return false;
            }
        }else {
            echo '数据库访问失败'.$this->mysql->error;
            exit();
        }
    }
}