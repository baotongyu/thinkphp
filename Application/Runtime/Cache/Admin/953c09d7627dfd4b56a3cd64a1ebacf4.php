<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="/thinkphp/admin/login/logon" method="post">
        <table>
            <tr>
                <td>用户名：</td>
                <td>
                    <input type="text" name="uname">
                    <input type="hidden" name="auth" value="3">
                </td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</body>
</html>