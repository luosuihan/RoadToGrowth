<?php
/**
 * 用户模型类，用来操作用户表
 */
namespace home\model;
use framework\core\Model;

class UserModel extends Model
{
    //查询用户列表
    public function userList()
    {
        $sql = "SELECT * FROM ecs_goods";
        $goods  = $this -> dao -> fetchAll($sql);
        return $goods;
    }
    //添加用户
    public function userAdd()
    {

    }
}