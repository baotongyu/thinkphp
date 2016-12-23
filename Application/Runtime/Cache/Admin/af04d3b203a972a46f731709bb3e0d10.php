<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改学生信息</title>
</head>
<body>
    <center>
        <h2>学生管理系统</h2>
        <h3><a href="/thinkphp/admin/user/index">查看学生信息</a> || <a href="/thinkphp/admin/user/add">添加学生信息</a></h3>
        <hr width="100%">
        <br><br>
        <form action="/thinkphp/admin/user/update" method="post">
            <table width="280px">
                <tr>
                    <td>姓名:</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
                        <input type="text" name="name" value="<?php echo ($data['name']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>班级:</td>
                    <td><input type="text" name="class" value="<?php echo ($data['class']); ?>"></td>
                </tr>
                <tr>
                    <td>性别:</td>
                    <td>
                        <input type="radio" name="sex" value="1" <?php if($data['sex'] == 1): ?>checked<?php endif; ?> >男
                        <input type="radio" name="sex" value="0" <?php if($data['sex'] == 0): ?>checked<?php endif; ?> >女
                    </td>
                </tr>
                <tr>
                    <td>年龄:</td>
                    <td><input type="text" name="age" value="<?php echo ($data['age']); ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="提 交">
                        <input type="reset" value="重 置">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>