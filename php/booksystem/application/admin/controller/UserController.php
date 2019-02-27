<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 17:13
 */
namespace admin\controller;
use framework\core\BController;
use framework\core\BFactory;
use admin\model\UserModel;
class UserController extends BController
{
    public function showUser()
    {
        $factory = BFactory::M("UserModel");
//        $where['u_account' => 'text'];
        $where = ['u_account' => 'text'];
        $u_result = $factory ->inquireUserTable($where);
        $this -> smarty ->assign('u_result',$u_result);
        $this -> smarty ->display(BAPP.MODEL.'/view/user.html');
    }
}