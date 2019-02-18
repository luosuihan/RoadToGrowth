<?php
/**
 * 订单控制器类，负责订单功能模块的
 */
require_once 'Controller.class.php';
class OrderController extends Controller
{
    //查询我的订单列表
    public function orderList()
    {
        //1. 命令模型去数据库查询订单列表
        require_once '../model/OrderModel.class.php';
        require_once '../model/Factory.class.php';
        $model = Factory::M('OrderModel');
        $order_list = $model -> select_order();

        //2. 将订单列表以表格的形式给用户展示
        $this -> smarty -> assign('orderList',$order_list);
        $this -> smarty -> display('order.html');
    }
    //下订单，在数据库生成一条记录
    public function placeOrder()
    {
    }
}