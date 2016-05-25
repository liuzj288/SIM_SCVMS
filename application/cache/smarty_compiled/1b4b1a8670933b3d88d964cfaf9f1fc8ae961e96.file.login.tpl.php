<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 11:18:45
         compiled from "G:\PhpstormProjects\sim\application\views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302795745d03d911285-36863380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4b1a8670933b3d88d964cfaf9f1fc8ae961e96' => 
    array (
      0 => 'G:\\PhpstormProjects\\sim\\application\\views\\login.tpl',
      1 => 1464193119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302795745d03d911285-36863380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5745d03d935977_97123903',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745d03d935977_97123903')) {function content_5745d03d935977_97123903($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resource/bootstrap-table-master/src/bootstrap-table.css">

    <script src="../../resource/bootstrap/js/jquery.min.js"></script>
    <script src="../../resource/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../resource/bootstrap-table-master/src/bootstrap-table.js"></script>
    <script src="../../resource/bootstrap-table-master/src/extensions/export/bootstrap-table-export.js"></script>
    <style type="text/css">
        body{
            font-family: 'microsoft yahei',Arial,sans-serif;
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
<div id="loginModal" class="modal show">
    <div class="modal-dialog" style="width: 30%;height: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center text-primary">登录</h1>
            </div>
            <div class="modal-body">
                <form action="" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input id="id" type="text" class="form-control input-lg" placeholder="学号">
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control input-lg" onkeydown="if(event.keyCode==13){logbutten.click()}" placeholder="登录密码">
                    </div>
                    <div>
                        <select id="person" class="form-control input-lg">
                            <option value="student">学生</option>
                            <option value="teacher">教师</option>
                            <option value="admin">管理员</option>
                        </select>
                    </div>
                    </br>
                    <div class="form-group">
                        <button id="logbutten" type="button" class="btn btn-primary btn-lg btn-block" onclick="login()">立刻登录</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script>
    function login() {
        var data ={
            id:document.getElementById('id').value,
            password:document.getElementById('password').value,
            person:document.getElementById("person").value
        };
        $.ajax({
            url: "/login/loginapi",
            type:"post",
            data:data,
            success: successCallback,
            error: errorCallback
        });
        function successCallback(res){
            if(res=="success") {
                document.cookie="id="+data.id;
                if(data.person == "student"){
                    window.location.href = 'studentcourse';
                }
                else if(data.person=="teacher"){
                    window.location.href = 'statement';
                }
                else{
                    window.location.href = 'administor';
                }
            };
        }
        function errorCallback(){
            alert(data);
        }
    }

</script>
</body>
</html><?php }} ?>
