<?php
/**
 * 封装PDO的操作
 */
namespace framework\dao;
use framework\dao\i_DAOPDO;
use PDO;
use PDOException;

class DAOPDO implements i_DAOPDO
{
    private static $instance;
    private $host;
    private $user;
    private $pass;
    private $port;
    private $charset;
    private $dbname;
    private $pdo;

    private function __construct($option)
    {
        $this -> host = isset($option['host'])?$option['host']:'';
        $this -> user = isset($option['user'])?$option['user']:'';
        $this -> pass = isset($option['pass'])?$option['pass']:'';
        $this -> dbname = isset($option['dbname'])?$option['dbname']:'';
        $this -> port = isset($option['port'])?$option['port']:3306;
        $this -> charset = isset($option['charset'])?$option['charset']:'utf8';
        var_dump($this -> host,$this -> user,$this -> pass,$this -> dbname,$this -> port,$this -> charset);
        //初始化PDO
        $this -> initDAO();
    }
    private function initDAO()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port;charset=$this->charset";
        $user = $this -> user;
        $pass = $this -> pass;
        try{
            $this ->pdo = new PDO($dsn,$user,$pass);
        }catch (PDOException $e){
            echo '数据库连接失败，信息如下:<br>'.$e->getMessage();
        }
    }
    private function __clone()
    {

    }
    public static function getSingleton($option)
    {
        if(!self::$instance instanceof self){
            self::$instance = new self($option);
        }
        return self::$instance;
    }

    //查询一条记录的方法
    public function fetchOne($sql)
    {
       $pdo_statement = $this-> pdo -> query($sql);
        if($pdo_statement == false){
            //说明没有执行成功
            echo 'SQL语句有误，详细信息如下:<br>'.$this->pdo->errorInfo()[2];
            exit;
        }
        //执行到这里说明没有错误
        return $pdo_statement -> fetch(PDO::FETCH_ASSOC);
    }
    //查询所有记录
    public function fetchAll($sql)
    {
        $pdo_statement = $this-> pdo -> query($sql);
        if($pdo_statement == false){
            //说明没有执行成功
            echo 'SQL语句有误，详细信息如下:<br>'.$this->pdo->errorInfo()[2];
            exit;
        }
        //执行到这里说明没有错误
        return $pdo_statement -> fetchAll(PDO::FETCH_ASSOC);
    }
    //查询一个字段的值
    public function fetchColumn($sql)
    {
        $pdo_statement = $this-> pdo -> query($sql);
        if($pdo_statement == false){
            //说明没有执行成功
            echo 'SQL语句有误，详细信息如下:<br>'.$this->pdo->errorInfo()[2];
            exit;
        }
        //执行到这里说明没有错误
        return $pdo_statement -> fetchColumn();
    }
    //执行增删改的方法
    public function query($sql)
    {
        $result = $this -> pdo -> exec($sql);
        //注意：可能返回等同于 false的非布尔值， 影响的记录数可能：0
        if($result === false){
            echo 'SQL语句有误，详细信息如下:<br>'.$this -> pdo->errorInfo()[2];
            exit;
        }
        //执行到这里,sql没有错误，返回受影响的记录数
        return $result;
    }
    //返回刚刚执行插入语句的主键
    public function lastId()
    {
        return $this -> pdo -> lastInsertId();
    }
    //对数据引号转义、并包裹的方法
    public function quote($data)
    {
        return $this -> pdo -> quote($data);
    }
}