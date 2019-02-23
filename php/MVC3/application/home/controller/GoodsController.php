<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/20
 * Time: 15:18
 */
//require_once "Controller.php";
namespace home\controller;
use framework\core\Factory;
use framework\core\Controller;
class GoodsController extends Controller
{
    public function goodsList()
    {
        $goodsFactory = Factory::M("GoodsModel");
        $goods = $goodsFactory -> selectGoods();
        //通过HTML模板引擎展示数据
        $this ->smarty -> assign('showGoods',$goods);
        $this ->smarty -> display(ROOT.'application/'.MODEL.'/view/order.html');
    }
    public function goodsListText()
    {
        echo 'home';
    }
}