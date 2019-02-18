<?php
/* Smarty version 3.1.30, created on 2019-02-18 16:24:25
  from "D:\code\htmlCode\H5text\php\使用模板引擎\ddd\smarty11.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6a6bb92318c8_86203310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a83b7114b14ddfe82f2107493b32065593ab86' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\使用模板引擎\\ddd\\smarty11.html',
      1 => 1548313311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a6bb92318c8_86203310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17748770745c6a6bb8cb29f1_56136863';
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
