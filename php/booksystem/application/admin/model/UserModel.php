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
    public function inquireUserTable()
    {
        $sql = "select * from `user`";
        $uResult = $this->bdao->queryAll($sql);
        return $uResult;
    }
}