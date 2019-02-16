<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/1/25
 * Time: 10:53
 */
require_once 'Model.php';
//require_once 'dao/DAO.php';
class UserModel extends Model {
 
    //添加用户
    public function addUser(){
        //连接数据库
        $sql = "select goods_name from ecs_goods";
        $row = $this->dao ->selectAll($sql);
        echo '<pre>';
        var_dump($row);
    }
    //删除用户
    public function deleteUser(){

    }
    //修改用户
    public function updateUser(){

    }
    //查询用户
    public function selectUser(){

    }
}