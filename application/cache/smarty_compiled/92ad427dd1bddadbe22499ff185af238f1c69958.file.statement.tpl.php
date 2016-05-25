<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 05:25:50
         compiled from "C:\wamp\www\new\sim\application\views\statement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:462357453ead0abad9-49531605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ad427dd1bddadbe22499ff185af238f1c69958' => 
    array (
      0 => 'C:\\wamp\\www\\new\\sim\\application\\views\\statement.tpl',
      1 => 1464171934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '462357453ead0abad9-49531605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57453ead0ec127_39272355',
  'variables' => 
  array (
    'value' => 0,
    'valueA' => 0,
    'tt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57453ead0ec127_39272355')) {function content_57453ead0ec127_39272355($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>statement</title>
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resource/bootstrap-table-master/src/bootstrap-table.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap-theme.min.css">

    <script src="../../resource/bootstrap/js/jquery.min.js"></script>
    <script src="../../resource/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../resource/bootstrap-table-master/src/bootstrap-table.js"></script>
    <script src="../../resource/bootstrap-table-master/src/extensions/export/bootstrap-table-export.js"></script>
    <script src="../../resource/tableExport.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header">

                <h1>
                    教务管理系统
                </h1>
            </div>
            <div>
                <table>
                    <thead>

                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(teacher::getTeacherById(), null, 0);?>
                    <tr>

                        <td><span style="background-color: #1A5CC6;font-size: 28px"> <b> &nbsp 上课时间查询&nbsp</b>  </span></td>

                    </tr>
                    <tr><td>
                            &nbsp <?php echo $_smarty_tpl->tpl_vars['value']->value[0]['name'];?>
老师，您好！
                        </td>
                    </tr>
                    <tr><td>
                            <button id="teaStatement" type="button" class="btn btn-primary" onclick="alltea()">其他老师课表</button>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <table id="tableTea"
               data-toggle="table"
               data-show-export="true"
               data-pagination="true"
               data-click-to-select="true"
               data-toolbar="#toolbar"
               data-search="true"
               data-show-toggle="true">
               <class="table table-condensed table-bordered">
            <thead>
            <tr>
                <th data-field="courseid">
                    课程号
                </th>
                <th data-field="name">
                    课程名字
                </th>
                <th data-field="classhour">
                    上课时间
                </th>
                <th data-field="classname">
                    上课地点
                </th>
            </tr>
            </thead>
            <tbody>
            <?php $_smarty_tpl->tpl_vars['valueA'] = new Smarty_variable(teacher::getAllCourseByTeaId(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valueA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tt']->key => $_smarty_tpl->tpl_vars['tt']->value) {
$_smarty_tpl->tpl_vars['tt']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['tt']->value['courseid'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['tt']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tt']->value['time'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tt']->value['classname'];?>
 </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <script>
        function alltea() {
            window.location.href='query';
        }
        function teaStatement(){
            var $table = $('#tableTea');
            $(function () {
                $.ajax({
                    url: "/teacher/stateTea",
                    type:"get",
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

        }
        function outBack() {
            window.location.href='Admin';
        }
    </script>
</body>
</html><?php }} ?>
