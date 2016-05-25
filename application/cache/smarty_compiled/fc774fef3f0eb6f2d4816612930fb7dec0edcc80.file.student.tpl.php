<?php /* Smarty version Smarty-3.1.18, created on 2016-05-23 05:21:02
         compiled from "C:\wamp\www\new\sim\application\views\student.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123975742d98edb12d6-32751907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc774fef3f0eb6f2d4816612930fb7dec0edcc80' => 
    array (
      0 => 'C:\\wamp\\www\\new\\sim\\application\\views\\student.tpl',
      1 => 1463228760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123975742d98edb12d6-32751907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5742d98f10f959_88135673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5742d98f10f959_88135673')) {function content_5742d98f10f959_88135673($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/bootstrap-table-master/src/bootstrap-table.css">

    <script src="resource/bootstrap/js/jquery.min.js"></script>
    <script src="resource/bootstrap/js/bootstrap.min.js"></script>
    <script src="resource/bootstrap-table-master/src/bootstrap-table.js"></script>
    <script src="resource/bootstrap-table-master/src/extensions/export/bootstrap-table-export.js"></script>
</head>
<body>
    <table id="table1"
           data-toggle="table"
           data-show-export="true"
           data-pagination="true"
           data-click-to-select="true"
           data-toolbar="#toolbar">
        <thead>
        <tr>
            <th data-field="studentId1">学号</th>
            <th data-field="name1">姓名</th>
        </tr>
        </thead>
        <body>
        <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(Student::getAllStudent(), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
        <tr class="gradeX">

            <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['t']->value['studentId'];?>
</td>
            <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</td>
        </tr>
        <?php } ?>
        </body>
    </table>

    <table id="table"
           data-toggle="table"
           data-show-export="true"
           data-pagination="true"
           data-click-to-select="true"
           data-toolbar="#toolbar">
        <thead>
        <tr>
            <th data-field="studentId">学号</th>
            <th data-field="name">姓名</th>
        </tr>
        </thead>
    </table>
<script>
    var $table = $('#table');
    $(function () {
        $.ajax({
                url: "/student/getalluser",
            success: successCallback,
            error: errorCallback
        });
    });
    function successCallback(json){
        json = $.parseJSON(json);
        $table.bootstrapTable('load', json);
    }
    function errorCallback() {
        alert("查询出现错误: ");
    }
</script>
</body>
</html><?php }} ?>
