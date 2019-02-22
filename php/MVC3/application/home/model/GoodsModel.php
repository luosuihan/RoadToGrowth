<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 11:31
 * 、、//展示商品
 */
namespace home\model;
use framework\core\Model;
class GoodsModel extends Model
{
    //查询数据
    public function selectGoods()
    {
        //1,连接数据库
//        echo "sfa0";
        /*require_once "../../../framework/dao/MVCDAO.php";
         $dao = MVCDAO::getSingle();*/
        //2，执行sql函数
         $sql = "select * from `ecs_goods`";
         $req = $this -> dao3 ->selectAll($sql);
         echo '<pre>';
         var_dump($req);
    }
}
//$text = new GoodsModel();
//$text ->selectGoods();