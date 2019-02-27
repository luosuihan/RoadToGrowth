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
    //通过传递参数，展示对应的字段
    public function inquireUserTable($where = [],$fileds = [])
    {
        if (empty($where)){
            $str_where = '';
        }else{
//            $str_where = '';
            $keys = array_keys($where)[0];
            $values = array_values($where)[0];
            $str_where = "where`$keys` = '$values'";
        }
//        echo 'where  =   '.$str_where;
        $sql = "select * from `user` $str_where";
        $uResult = $this->bdao->queryAll($sql);
        return $uResult;
    }
}