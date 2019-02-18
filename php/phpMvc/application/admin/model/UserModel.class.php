<?php
/**
 * 用户模型类，用来操作用户表
 */
require_once 'Model.class.php';
class UserModel extends Model
{
    //查询用户列表
    public function userList()
    {
        $sql = "SELECT * FROM user";
        $goods  = $this -> dao -> fetchAll($sql);
        return $goods;
    }
    //添加用户
    public function userAdd()
    {

    }
}