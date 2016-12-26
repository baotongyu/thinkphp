<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台首页</title>
    <link href="../../../../thinkphp/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/animate.css" rel="stylesheet">
    <link href="../../../../thinkphp/Public/admin/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
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
                            <li><a href="profile.html">个人信息</a></li>
                            <li><a href="contacts.html">更换头像</a></li>
                            <li><a href="mailbox.html">积分查看</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">退出</a></li>
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

                <!--商品管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">查看商品</a></li>
                        <li><a href="dashboard_2.html">添加商品</a></li>
                    </ul>
                </li>
                <!--商品管理 结束-->

                <!--物流管理 开始-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">物流管理</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">信息查看</a></li>
                    </ul>
                </li>
                <!--物流管理 结束-->
            </ul>

        </div>
    </nav>
    <!--左侧导航栏 结束-->

    <div id="page-wrapper" class="gray-bg">
        <!--右侧header头 开始-->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="详情展示..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="../../../../thinkphp/Public/admin/img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="../../../../thinkphp/Public/admin/img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="../../../../thinkphp/Public/admin/img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> 退 出
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <!--右侧header头 结束-->

        <!--右侧详情展示 开始-->
        <div class="ibox-content">
            <div id="editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="editable_length">
                            <label>每页展示
                                <select name="editable_length" aria-controls="editable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>条
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="editable_filter" class="dataTables_filter">
                            <label>搜索<input type="search" class="form-control input-sm" placeholder="" aria-controls="editable"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover  dataTable" id="editable" role="grid" aria-describedby="editable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 142px;">编号</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 142px;">姓名</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 142px;">性别</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 142px;">年龄</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 142px;">状态</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 142px;">权限</th>
                                    <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 143px;">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="gradeA odd" role="row">
                                        <td class="sorting_1"><?php echo ($vo['id']); ?></td>
                                        <td><?php echo ($vo['name']); ?></td>
                                        <td><?php echo ($vo['sex']==1?男:女); ?></td>
                                        <td class="center"><?php echo ($vo['age']); ?></td>
                                        <td class="center"><?php echo ($vo['status']==1?开启:禁用); ?></td>
                                        <td class="center">
                                            <?php if($vo['auth']==3) echo '超级管理员'; else if($vo['auth']==2) echo '管理员'; else echo '普通用户'; ?>
                                        </td>
                                        <td class="center">
                                            <a href="/thinkphp/admin/user/edit?id=<?php echo ($vo['id']); ?>">修改</a> ||
                                            <a href="/thinkphp/admin/user/del?id=<?php echo ($vo['id']); ?>">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="editable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="editable_previous"><a href="#" aria-controls="editable" data-dt-idx="0" tabindex="0">首页</a></li>
                                <li class="paginate_button active"><a href="#" aria-controls="editable" data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="editable" data-dt-idx="2" tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="editable" data-dt-idx="3" tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="editable" data-dt-idx="4" tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="editable" data-dt-idx="5" tabindex="0">5</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="editable" data-dt-idx="6" tabindex="0">6</a></li>
                                <li class="paginate_button next" id="editable_next"><a href="#" aria-controls="editable" data-dt-idx="7" tabindex="0">下一页</a></li>
                                <li class="paginate_button next" id="editable_next"><a href="#" aria-controls="editable" data-dt-idx="7" tabindex="0">末页</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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