<?php
/* Smarty version 3.1.30, created on 2019-02-28 10:28:04
  from "D:\code\htmlCode\H5text\php\MVC3\application\home\view\staffinfo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c774734a27da8_92114831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b395df451009f73c0a95e5da4c724d98e2e76ad' => 
    array (
      0 => 'D:\\code\\htmlCode\\H5text\\php\\MVC3\\application\\home\\view\\staffinfo.html',
      1 => 1551065031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c774734a27da8_92114831 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>员工号</th>
        <th>员工姓名</th>
        <th>员工工资</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staff']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['empno'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['job'];?>
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
