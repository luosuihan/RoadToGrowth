<?php
/* Smarty version 3.1.30, created on 2019-01-24 15:01:55
  from "D:\code\htmlCode\H5text\php\使用模板引擎\smarty.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4962e3499521_05539964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e803d99ad843890ae432230e0176a2b5eade38' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\使用模板引擎\\smarty.html',
      1 => 1548313311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4962e3499521_05539964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13711537955c4962e346d851_73158936';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示数据</title>
    <style>
        th{
            /*margin: 10px;*/
            padding: 10px;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>商品ID</th>
        <th>商品名字</th>
        <th>商品价格</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v', false, 'k');
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
} else {
?>

    <tr>
        <td>没有您查找的数据</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
