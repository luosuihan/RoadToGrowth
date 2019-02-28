<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 17:13
 * describe : 对学生和管理员进行处理
 */
namespace admin\controller;
use framework\core\BController;
use framework\core\BFactory;
class UserController extends BController
{
    public $broot;
    public function showUser()
    {
        $factory = BFactory::M("UserModel");
        $number = isset($_POST['number'])?$_POST['number']:'';
        $pwd = isset($_POST['password'])?$_POST['password']:'';
        $where = ['u_account' => "$number",'u_pwd' => "$pwd"];
        $u_result = $factory ->inquireUserTable($where);
        if (!empty($u_result)){
            foreach($u_result as $key=>$value){
                foreach($value as $key2=>$value2){
                    if ($key2 == 'u_power'){
                        $this ->broot = $value2;
                    }
                }
            }
//            echo '权限  -- '.$this ->broot;
            if ($this ->broot == 'broot'){
                $this -> smarty ->assign('u_result','管理员-------');
                $this -> smarty ->display(BAPP.MODEL.'/view/userbg.html');
            }else{
                $this -> smarty ->assign('u_result',$u_result);
                $this -> smarty ->display(BAPP.MODEL.'/view/user.html');
            }
        }else{
            $this -> smarty ->assign('u_result','暂无数据');
            $this -> smarty ->display(BAPP.MODEL.'/view/userfail.html');
        }
    }
}