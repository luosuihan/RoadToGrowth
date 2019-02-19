<?php
/**
 * Created by PhpStorm.
 * User: m1762
 * Date: 2019/2/16
 * Time: 17:26
 * 描述：展示订单详情
 */
//require_once "../../../framework/Controller.php";
namespace home\controller;
use framework\Factory;
use framework\Controller;
class OrderController extends Controller
{
    //查询订单
    public function orderlist()
    {
//        echo 'OrderController'.'<br>';
        $orderFactory = Factory::M("OrderModel");
        $orderList = $orderFactory -> selectOrder();
//        echo "<pre>";
//        var_dump($orderList);
        $this ->smarty -> assign('goods',$orderList);
        $this ->smarty -> display('./application/'.MODULE.'/view/order.html');
    }
    //插入订单
    public function orderInsert($attribute)
    {

    }
    //测试入口
    public function orderListText()
    {
        echo 'home';
    }
}
$ss = new OrderController();
$ss ->orderlist();