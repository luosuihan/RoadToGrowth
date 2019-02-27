<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/17
 * Time: 9:11
 */
//require_once '../../../framework/BModell.php';
namespace home\model;
use framework\Model;
class OrderModel extends Model
{
    //增删改查
    public function selectOrder()
    {
//        echo "ooo";
//        $sql = "select * from ecs_goods";
//        echo 'OrderModel'.'<br>';
        $sql = "select goods_id,goods_name,shop_price from ecs_goods;";
        $showdb = $this ->dao->selectAll($sql);
//        echo "<>"
        return $showdb;
    }
    public function insertOrder($attribute)
    {
//        insert into ecs_goods (stuname) value();
    }
}