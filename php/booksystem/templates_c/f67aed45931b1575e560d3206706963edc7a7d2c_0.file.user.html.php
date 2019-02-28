<?php
/* Smarty version 3.1.30, created on 2019-02-28 11:18:40
  from "D:\code\htmlCode\H5text\php\booksystem\application\admin\view\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c775310c58583_54840440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f67aed45931b1575e560d3206706963edc7a7d2c' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\booksystem\\application\\admin\\view\\user.html',
      1 => 1551318451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c775310c58583_54840440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .zh{
            width: 960px;
            margin: 0 auto;
        }
        table{
            /*border: 1px;
            background-color: #e43f3b;*/
        }
        td{
            padding: 0 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<table border="1px" cellspacing="0" cellpadding="0" class="zh">
    <caption>用户信息</caption>
    <tr>
        <td>序列号</td>
        <td>账户</td>
        <td>密码</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['u_result']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['u_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['u_account'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['u_pwd'];?>
</td>
    </tr>
    <?php
}
} else {
?>

    <tr>
        <td colspan="3">请确认账户或密码</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
