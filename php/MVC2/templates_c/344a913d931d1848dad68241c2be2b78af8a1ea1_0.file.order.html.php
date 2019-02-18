<?php
/* Smarty version 3.1.30, created on 2019-02-18 17:37:44
  from "D:\code\htmlCode\H5text\php\MVC2\application\home\view\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6a7ce84dd7e9_85146081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344a913d931d1848dad68241c2be2b78af8a1ea1' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\MVC2\\application\\home\\view\\order.html',
      1 => 1550482661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a7ce84dd7e9_85146081 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单列表</title>
</head>
<body>
<table>
    <tr>
        <th>序号</th>
        <th>商品名称</th>
        <th>商品价格</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
