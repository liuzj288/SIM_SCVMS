<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 09:50:42
         compiled from "C:\wamp\www\new\sim\application\views\administor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3184757445acc3e4c43-57653584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4e58109341e9816545748fcfcc452c3067ad02' => 
    array (
      0 => 'C:\\wamp\\www\\new\\sim\\application\\views\\administor.tpl',
      1 => 1464187831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3184757445acc3e4c43-57653584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57445acc49faf5_71255498',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57445acc49faf5_71255498')) {function content_57445acc49faf5_71255498($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administor</title>
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resource/bootstrap-table-master/src/bootstrap-table.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap-theme.min.css">

    <script src="../../resource/bootstrap/js/jquery.min.js"></script>

    <script src="../../resource/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../resource/bootstrap-table-master/src/bootstrap-table.js"></script>
    <script src="../../resource/bootstrap-table-master/src/extensions/export/bootstrap-table-export.js">
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

                    </tbody>
                </table>

            </div>
            <br>
            <br>


            <div class="carousel slide" id="carousel-261278">
                <div class="carousel-inner">
                    <div class="item active" style="width: 100%;height: 400px">
                        <img alt="" src="../../resource/img/1.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>

            </div>


            <br>
            <div>
                <div style="float: left"><button id="manIn" type="button" class="btn btn-primary" onclick="course()">排课系统</button>
                    <button id="putCourse" type="button" class="btn btn-primary" onclick="classroombrower()">教室借用</button>
                </div>
                <div style="float: right"> <button id="outBack" type="button" class="btn btn-primary" onclick="outBack()">退出</button>
                </div>
            </div>
        </div>

    </div>
    <script>
        function course() {
            window.location.href='course';
        }
        function classroombrower() {
            window.location.href='classroombrower';
        }

        function putCourse() {
            window.location.href = 'publishC';
        }
        function outBack() {
            window.location.href='login';
        }
    </script>
</body>
</html><?php }} ?>
