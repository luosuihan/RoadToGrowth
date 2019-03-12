<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/26
 * Time: 15:51
 */
namespace admin\model;
use \framework\core\BModel;
class UserModel extends BModel
{
    //通过传递参数，展示对应的字段  -- 学生登录查询
    public function inquireUserTable($where = [])
    {
        if (empty($where)){
            $str_where = '';
        }else{
            $kuesr = array_keys($where)[0];
            $vuser = array_values($where)[0];
            $kpwd = array_keys($where)[1];
            $vpwd = array_values($where)[1];
            $str_where = "where`$kuesr` = '$vuser' AND `$kpwd` = '$vpwd'";
        }
//        echo 'where  =   '.$str_where;
        $sql = "select * from `user` $str_where";
        $uResult = $this->bdao->queryAll($sql);
        if (!empty($uResult)){
            return $uResult;
        }else{
            //如果账户和密码不匹配，走此else ，，
            return [];
        }
    }
}