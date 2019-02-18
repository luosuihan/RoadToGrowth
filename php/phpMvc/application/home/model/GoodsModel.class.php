<?php
/**
 * Created by PhpStorm.
 * User: 小辛
 * Date: 2017/9/9
 * Time: 14:46
 */

namespace home\model;


use framework\core\Model;

class GoodsModel extends Model
{
    public function goodsList()
    {
        $sql = "SELECT * FROM tn_goods";
        return $this ->dao ->fetchAll($sql);
    }
}