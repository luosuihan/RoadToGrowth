<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 11:35
 */
//namespace framework\dao;
//use mysqli;
namespace framework\dao;
use \mysqli;
class MVCDAO
{
    public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;
    public $character;
    public $mysqli;
    public static $sigle = null;
    private function  __construct()
    {
        $this->host = $GLOBALS['config1']['host'];
        $this->user = $GLOBALS['config1']['user'];
        $this->pwd = $GLOBALS['config1']['pwd'];
        $this->dbname = $GLOBALS['config1']['dbname'];
        $this->port = $GLOBALS['config1']['port'];
        /*$this->host = '127.0.0.1';
        $this->user = 'root';
        $this->pwd = '123456';
        $this->dbname = 'ecshop';
        $this->port = 3306;*/
        $this -> connectdb($this->host,$this->user,$this->pwd,$this->dbname,$this->port);
    }
    private function connectdb($host,$user,$pwd,$dbname,$port)
    {
//        var_dump($host,$user,$pwd,$dbname,$port);
        $this ->mysqli = new mysqli($host,$user,$pwd,$dbname,$port);
        if($this ->mysqli->error)
        {
//            echo '数据库连接失败';
            die('数据库连接失败');
        }
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getSingle()
    {
//        echo "getSingle";
        if(self::$sigle == null)
        {
            self::$sigle = new MVCDAO();
        }
        return self::$sigle;
    }
    //单条数据查询
    public function selectOne($sql)
    {
//        echo '$result';
        $result = $this->mysqli->query($sql);
        if($result){
            $row = $result -> fetch_assoc();
            $result->free();//释放结果
            return $row;
        }else{
            die('数据查询失败');
        }

    }
    //多条数据查询
    public function selectAll($sql)
    {
        $result = $this->mysqli->query($sql);
        if($result){
            $arr = [];
            while ($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
            //释放结果
            $result -> free();
            return $arr;
        }else{
            die('数据查询失败');
        }
    }
    //增，删，改
    public function myquery($sql)
    {
        $result = $this->mysqli->query($sql);
        if($result){
            $affected = $this->mysqli->affected_rows;
            if ($affected>0){
                return true;
            }else{
                return false;
            }
        }else {
            die('数据有误');
        }
    }
}