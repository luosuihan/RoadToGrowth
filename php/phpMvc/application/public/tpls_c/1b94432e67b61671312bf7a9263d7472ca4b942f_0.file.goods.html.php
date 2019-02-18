<?php
/* Smarty version 3.1.30, created on 2017-09-09 16:05:29
  from "D:\tnwamp\apache\htdocs\0909\application\home\view\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b3a0c903fca1_09341386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b94432e67b61671312bf7a9263d7472ca4b942f' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0909\\application\\home\\view\\goods.html',
      1 => 1504939965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b3a0c903fca1_09341386 (Smarty_Internal_Template $_smarty_tpl) {
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
