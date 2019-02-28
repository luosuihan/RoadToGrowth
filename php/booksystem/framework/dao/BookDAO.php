<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 14:13
 */
namespace framework\dao;
use \mysqli;
class BookDAO
{
    public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;
    public $mysqli;
    public static $single;
    private function __construct($option)
    {
        $this -> host = $option['host'];
        $this -> user = $option['user'];
        $this -> pwd = $option['pwd'];
        $this -> dbname = $option['dbname'];
        $this -> port = $option['port'];
        $this -> bookConnect($this -> host,$this -> user,$this -> pwd,$this -> dbname,$this -> port);
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function bookConnect($host,$user,$pwd,$dbname,$port)
    {
        $this ->mysqli = new mysqli($host,$user,$pwd,$dbname,$port);
        if ($this ->mysqli ->error){
            die('数据库连接失败');
        }
    }
    public static function getSingle($option)
    {
        if (self::$single == null){
            self::$single = new BookDAO($option);
        }
        return self::$single;
    }
    //单条语句查询
    public function queryOne($sql)
    {
        $result = $this ->mysqli->query($sql);
        if($result){
            $row = $result -> fetch_assoc();
            $result -> free();
            return $row;
        }else{
            die("数据查询失败");
        }
    }
    //多条语句查询
    public function queryAll($sql)
    {
        $result = $this ->mysqli->query($sql);
        if($result){
            $arr = [];
            while ($row = $result -> fetch_assoc()){
                $arr[] = $row;
            }
            $result -> free();
            return $arr;
        }else {
            die("数据库查询失败");
        }
    }
    //主键查询
    /*public function findPrimary()
    {
        $sql = "desc $this->true_table ";
        $result = $this -> dao3 ->selectOne($sql);
        foreach ($result as $k => $v)
        {
            if ($v['key'] == 'PRI'){
                $this ->pk = $v['Field'];
            }
        }
    }*/
    //增删改
    public function myquery($sql)
    {
        $result = $this ->mysqli->query($sql);
        if($result){
            $affected = $this ->mysqli->affected_rows;
            if($affected>0){
                return true;
            }else {
                return false;
            }
        }else{
            die("数据库操作失败");
        }
    }
}