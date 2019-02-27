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
        $u_result = $factory ->inquireUserTable();
//        echo'<pre>';
//        var_dump($u_result);
        $this -> smarty ->assign('u_result',$u_result);
        $this -> smarty ->display('./application/admin/view/user.html');
    }
}