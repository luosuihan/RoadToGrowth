<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/17
 * Time: 9:11
 */
require_once 'Model.php';
class OrderModel extends Model
{
    //增删改查
    public function selectOrder()
    {
        echo "ooo";
        $sql = "select * from ecs_goods";
        $showdb = $this ->dao->selectAll($sql);
        echo'<pre>';
        var_dump($showdb);
    }
    public function insertOrder($attribute)
    {
//        insert into ecs_goods (stuname) value();
    }
}