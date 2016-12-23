<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <link href="../../../../thinkphp/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/animate.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">IN+</h1>
        </div>
        <h3>请登录</h3>
        <form class="m-t" role="form" action="/thinkphp/admin/login/dologin" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="uname">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            <a href="#"><small>忘记密码？</small></a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="../../../../thinkphp/Public/admin/js/jquery-2.1.1.js"></script>
<script src="../../../../thinkphp/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>