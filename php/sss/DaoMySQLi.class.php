<?php
class DaoMySQLi
{
    public $host;
    public $user;
    public $pwd;
    public $dbname;
    public $port;
    public $charset;
    public $mysqli;     //属性保存数据库连接

    public static $instance = null;

    private function __construct($host,$user,$pwd,$dbname,$port,$charset)
    {
        $this ->host = $host;
        $this -> user = $user;
        $this -> pwd = $pwd;
        $this -> dbname= $dbname;
        $this -> port = $port;
        $this -> charset = $charset;

        //连接数据库
        $this -> connect();
    }

    public static function getSingleton()
    {
       if(self::$instance == null){
           self::$instance = new self('localhost','root','123456','demo1',3306,'utf8');
       }
       return self::$instance;
    }

    //连接数据库
    private function connect()
    {
        $this->mysqli = new mysqli($this->host,$this->user,$this->pwd,$this->dbname,$this->port);
    }

    //关闭数据库
    public function __destruct()
    {
        //mysqli_close($this->mysqli);
        $this->mysqli->close();
    }

}

