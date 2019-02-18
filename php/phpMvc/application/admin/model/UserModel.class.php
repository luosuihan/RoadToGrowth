<?php
/**
 * 用户模型类，用来操作用户数据表的
 */
require_once 'Model.class.php';
class UserModel extends Model
{
    //增加用户
    public function add_user()
    {
        $sql = "INSERT INTO user VALUES(null,'张三丰','admin123')";
        $this -> dao -> query($sql);
    }
}