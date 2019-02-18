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
class OrderController extends Controller
{
    //查询订单
    public function orderlist()
    {
        //1,通过模型去数据库查找数据
//        echo "sfd";
//        require_once "../model/OrderModel.php";
//        require_once "../../../framework/Factory.php";
        $orderFactory = Factory::M("OrderModel");
        /*var_dump($orderFactory);*/
        $orderList = $orderFactory -> selectOrder();
        //通过HTML模型来填充数据
       /* require_once "../../smarty-3.1.30/libs/Smarty.class.php";
        $smarty = new Smarty();
        $smarty -> left_delimiter = '<{';
        $smarty -> right_delimiter = '}>';
        $smarty -> setTemplateDir('tld/');
        $smarty -> setCompileDir('tld_c/');*/
        $this ->smarty -> assign('orderList',$orderList);
        $this ->smarty -> display('order.html');
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
/*$ss = new OrderController();
$ss ->orderlist();*/