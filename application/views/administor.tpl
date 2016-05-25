<!DOCTYPE html>
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
</html>