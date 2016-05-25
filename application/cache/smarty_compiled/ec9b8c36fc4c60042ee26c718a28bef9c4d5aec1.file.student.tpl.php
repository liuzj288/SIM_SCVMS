<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 11:17:12
         compiled from "G:\PhpstormProjects\sim\application\views\student.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259865745d0080ac080-46343831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9b8c36fc4c60042ee26c718a28bef9c4d5aec1' => 
    array (
      0 => 'G:\\PhpstormProjects\\sim\\application\\views\\student.tpl',
      1 => 1463228760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259865745d0080ac080-46343831',
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
  'unifunc' => 'content_5745d00810e8d3_52893664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745d00810e8d3_52893664')) {function content_5745d00810e8d3_52893664($_smarty_tpl) {?><!DOCTYPE html>
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
