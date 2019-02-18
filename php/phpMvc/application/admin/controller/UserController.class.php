<?php
/**
 * 用户控制器，负责用户模块的管理
 */

class UserController extends Controller
{
    public function userSelect()
    {
        //1. 命名模型处理数据（增删改查）
        $model = Factory::M('UserModel');
        $users = $model -> userList();

        //2. 命令视图显示数据

        $this -> smarty -> assign('users',$users);
        $this -> smarty -> display('user.html');
    }
}