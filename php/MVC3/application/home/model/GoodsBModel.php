<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 11:31
 * 、、//展示商品
 */
namespace home\model;
use framework\core\BModel;
class GoodsBModel extends BModel
{
    public $logic_table = 'emp';
    //查询数据
    public function selectGoods()
    {
         $sql = "select * from `ecs_goods`";
         $req = $this -> dao3 ->selectAll($sql);
         return $req;
    }
}
//$text = new GoodsBModel();
//$text ->selectGoods();