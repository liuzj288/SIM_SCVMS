<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 05:22:51
         compiled from "C:\wamp\www\new\sim\application\views\query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29564574573e3ad2a75-26827076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415877dbb8f97e4d444e492542fc92f17d948c38' => 
    array (
      0 => 'C:\\wamp\\www\\new\\sim\\application\\views\\query.tpl',
      1 => 1464171768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29564574573e3ad2a75-26827076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_574573e3bd26a8_25297226',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574573e3bd26a8_25297226')) {function content_574573e3bd26a8_25297226($_smarty_tpl) {?><!DOCTYPE html>
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
                <th data-field="teacherId">
                    教师号
                </th>
                <th data-field="teachername">
                    教师名字
                </th>
                <th data-field="courseid">
                    课程号
                </th>
                <th data-field="name">
                    课程名称
                </th>
                <th data-field="time">
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
                        url: "/query/Tea",
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
