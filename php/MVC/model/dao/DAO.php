<?php

/**
 * 封装数据
 * User: m1762
 * Date: 2019/1/25
 * Time: 11:17
 *
 */
class DAO
{
    public $mysqli ;
    public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;
    private static $single = null;
    private function __construct($property){
        $this->host = $property['host'];
        $this->user  = $property['user'];
        $this->pwd  = $property['pwd'];
        $this->dbname  = $property['dbname'];
        $this->port  = $property['port'];
        //连接数据
        $this -> DAOConnect($this->host,$this->user,$this->pwd,$this->dbname,$this->port);
    }
    private function __clone(){
        // TODO: Implement __clone() method.
    }
    //数据库连接
    private function DAOConnect($host,$user,$pwd,$dbname,$port){
        $this -> mysqli = new mysqli($host,$user,$pwd,$dbname,$port);
        if($this -> mysqli ->errno){
            die("数据库连接失败:".$this -> mysqli ->error);
        }/*else{
            echo '连接成功';
        }*/
    }
    //
    public static function getSingleton($property){
        if(self::$single == null){
//            self::single = new self($property); //错误写法
            self::$single = new self($property);
        }
        return self::$single;
    }
    //查询单条语句
    public function selectOne($sql){
        $result = $this -> mysqli -> query($sql);
        if($result){
            $row = $result -> fetch_assoc();
            //释放结果集
            $result -> free();
            return $row;
        }else{
            echo '数据库插入失败';
            exit();
        }
    }
    //查询所有语句
    public function selectAll($sql){
        $result = $this -> mysqli -> query($sql);
        if($result){
          $arr = [];
          while ($row = $result -> fetch_assoc()){
              $arr[] = $row;
          }
            $result -> free();
//          var_dump($arr);
          return $arr;
        }else{
            echo '数据查询失败'.$this->mysqli->error;
            exit();
        }
    }
    //对数据的增删改
    public function myQuery($sql){
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
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        //关闭数据库
        $this -> mysqli ->close();
    }
}