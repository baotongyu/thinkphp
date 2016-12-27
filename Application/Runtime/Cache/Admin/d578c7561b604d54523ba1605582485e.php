<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台单选题添加</title>
    <link href="../../../../thinkphp/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/animate.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <!--左侧导航栏 开始-->
    <!--左侧导航栏 开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <!--个人中心 开始-->
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../../../../thinkphp/Public/admin/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">超级管理员</strong>
                             </span> <span class="text-muted text-xs block">个人中心<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="">个人信息</a></li>
                            <li><a href="">更换头像</a></li>
                            <li class="divider"></li>
                            <li><a href="/thinkphp/admin/login/outlogin">退出</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <!--个人中心 结束-->

                <!--用户管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">用户管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/thinkphp/admin/user/index">查看用户</a></li>
                        <li><a href="/thinkphp/admin/user/add">添加用户</a></li>
                    </ul>
                </li>
                <!--用户管理 结束-->

                <!--栏目管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">栏目管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/thinkphp/admin/plate/index">查看栏目</a></li>
                        <li><a href="/thinkphp/admin/plate/add">添加栏目</a></li>
                    </ul>
                </li>
                <!--栏目管理 结束-->

                <!--试题管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">试题管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/thinkphp/admin/questions/index1">查看单选题</a></li>
                        <li><a href="/thinkphp/admin/questions/index2">查看多选题</a></li>
                        <li><a href="/thinkphp/admin/questions/index3">查看判断题</a></li>
                        <li><a href="/thinkphp/admin/questions/add1">添加单选题</a></li>
                        <li><a href="/thinkphp/admin/questions/add2">添加多选题</a></li>
                        <li><a href="/thinkphp/admin/questions/add3">添加判断题</a></li>
                    </ul>
                </li>
                <!--试题管理 结束-->

                <!--试卷管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">试卷管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/thinkphp/admin/test/index">查看试卷</a></li>
                        <li><a href="/thinkphp/admin/test/add">添加试卷</a></li>
                    </ul>
                </li>
                <!--试卷管理 结束-->

                <!--成绩单管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">成绩单管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/thinkphp/admin/result/index">查看成绩单</a></li>
                    </ul>
                </li>
                <!--成绩单管理 结束-->
            </ul>
        </div>
    </nav>
<!--左侧导航栏 结束-->
    <!--左侧导航栏 结束-->

    <div id="page-wrapper" class="gray-bg">
        <!--右侧header头 开始-->
        <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="详情展示..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="/thinkphp/admin/login/outlogin">
                    <i class="fa fa-sign-out"></i> 退 出
                </a>
            </li>
        </ul>
    </nav>
</div>
        <!--右侧header头 结束-->

        <!--右侧详情展示 开始-->
        <div class="ibox-content">
            <form action="/thinkphp/admin/questions/insert1" method="post" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">题目：</label>
                    <div class="col-sm-10"><input type="text" class="form-control" name="title"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">选项：</label>
                    <div class="col-sm-10">
                        <div class="btn btn-primary">A：</div>
                        <input type="text" class="form-control" name="answerA">
                        <div class="btn btn-primary">B：</div>
                        <input type="text" class="form-control" name="answerB">
                        <div class="btn btn-primary">C：</div>
                        <input type="text" class="form-control" name="answerC">
                        <div class="btn btn-primary">D：</div>
                        <input type="text" class="form-control" name="answerD">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">正确答案：</label>
                    <div class="col-sm-10">
                        <div>
                            <label> <input type="radio" value="1" id="optionsRadios1" name="answer">A</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label> <input type="radio" value="2" id="optionsRadios2" name="answer">B</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label> <input type="radio" value="3" id="optionsRadios3" name="answer">C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label> <input type="radio" value="4" id="optionsRadios4" name="answer">D</label>
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">科目：</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="course">
                            <option>请选择...</option>
                            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo['pname']); ?>"><?php echo ($vo['pname']); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">难易程度：</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="status">
                            <option>请选择...</option>
                            <option value="1">简单</option>
                            <option value="2">适中</option>
                            <option value="3">有点难</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">分值：</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="m_score">
                            <option>请选择...</option>
                            <option value="1">1分</option>
                            <option value="2">2分</option>
                            <option value="5">5分</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">添 加</button>
                        <button class="btn btn-primary" type="reset">重 置</button>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
            </form>
        </div>
        <!--右侧详情展示 结束-->

        <!--右侧尾部信息 开始-->
        <div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2015
    </div>
</div>
        <!--右侧尾部信息 结束-->
    </div>
</div>

<!-- Mainly scripts -->
<script src="../../../../thinkphp/Public/admin/js/jquery-2.1.1.js"></script>
<script src="../../../../thinkphp/Public/admin/js/jquery-ui-1.10.4.min.js"></script>
<script src="../../../../thinkphp/Public/admin/js/bootstrap.min.js"></script>
<script src="../../../../thinkphp/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../../../thinkphp/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../../../../thinkphp/Public/admin/js/inspinia.js"></script>
<script src="../../../../thinkphp/Public/admin/js/plugins/pace/pace.min.js"></script>
<script>
    $(document).ready(function(){
        $("#todo, #inprogress, #completed").sortable({
            connectWith: ".connectList",
            update: function( event, ui ) {
                var todo = $( "#todo" ).sortable( "toArray" );
                var inprogress = $( "#inprogress" ).sortable( "toArray" );
                var completed = $( "#completed" ).sortable( "toArray" );
                $('.output').html("ToDo: " + window.JSON.stringify(todo) + "<br/>" + "In Progress: " + window.JSON.stringify(inprogress) + "<br/>" + "Completed: " + window.JSON.stringify(completed));
            }
        }).disableSelection();
    });
</script>
</body>
</html>