<?php
/* Smarty version 3.1.30, created on 2019-02-23 11:08:40
  from "D:\code\htmlCode\H5text\php\MVC3\application\home\view\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c70b938bc03c3_08838275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e05504058fb945f549537af5d61b0677bf63fb' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\MVC3\\application\\home\\view\\order.html',
      1 => 1550827825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c70b938bc03c3_08838275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <th>序号</th>
        <th>商品名称</th>
        <th>商品价格</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showGoods']->value, 'v', false, 'k');
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
