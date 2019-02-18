<?php
/**
 * Created by PhpStorm.
 * User: 小辛
 * Date: 2017/9/9
 * Time: 14:43
 */

namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;


class GoodsController extends Controller
{
    //查询商品列表
    public function goodsList()
    {
        //1. 命令商品模型查询数据
        $model = Factory::M('GoodsModel');
        $goods = $model -> goodsList();

        //2. 命令视图将结果显示出来
        $this -> smarty -> assign('goods',$goods);
        $this -> smarty -> display('goods.html');
    }
}