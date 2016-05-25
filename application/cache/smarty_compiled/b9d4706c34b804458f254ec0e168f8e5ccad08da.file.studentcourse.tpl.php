<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 09:41:18
         compiled from "C:\wamp\www\new\sim\application\views\studentcourse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137855745ac4b535d03-13861638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d4706c34b804458f254ec0e168f8e5ccad08da' => 
    array (
      0 => 'C:\\wamp\\www\\new\\sim\\application\\views\\studentcourse.tpl',
      1 => 1464187262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137855745ac4b535d03-13861638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5745ac4b5ff3e1_68153853',
  'variables' => 
  array (
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745ac4b5ff3e1_68153853')) {function content_5745ac4b5ff3e1_68153853($_smarty_tpl) {?><!DOCTYPE html>
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
                    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(studentcourse::getStuById(), null, 0);?>
                    <tr>

                        <td><span style="background-color: #1A5CC6;font-size: 28px"> <b> &nbsp 上课时间查询&nbsp</b>  </span></td>

                    </tr>
                    <tr><td>
                            &nbsp <?php echo $_smarty_tpl->tpl_vars['value']->value[0]['name'];?>
同学，您好！
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
                <th data-field="teacherId">
                    教师号
                </th>
                <th data-field="teachername">
                    教师名字
                </th>
                <th data-field="classhour">
                    上课时间
                </th>
                <th data-field="classname">
                    上课地点
                </th>
            </tr>
            </thead>
        </table>
        <script>
                var $table = $('#tableTea');
                $(function () {
                    $.ajax({
                        url: "/studentcourse/getcourseByStuId",
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
            function outBack() {
                window.location.href='Admin';
            }
        </script>
</body>
</html><?php }} ?>
