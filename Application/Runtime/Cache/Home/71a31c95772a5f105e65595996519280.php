<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>正在考试...</title>
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/mokaoba.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/daohanglan.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/testing.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/test.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/basetest.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/ymPrompt.css">
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
<!--header头 开始-->
<!--注册登录js-->
<script type="text/javascript">
    $(function () {
        H_login = {};
        H_login.openLogin = function () {
            $('.login-header').click(function () {

                $("body").append("<div id='mask'></div>");
                $("#mask").addClass("mask").fadeIn("slow");

                switchTag('_xka', '_xka_list', 1, 2, 'conxk1', 'conxk2');
                $('.js_login').show();
                $('.login-bg').show();
            });
            $('.zhuce-header').click(function () {

                $("body").append("<div id='mask'></div>");
                $("#mask").addClass("mask").fadeIn("slow");

                switchTag('_xka', '_xka_list', 2, 2, 'conxk1', 'conxk2');
                $('.js_login').show();
                $('.login-bg').show();
            });
        };
        H_login.closeLogin = function () {
            $('.close-login').click(function () {
                $('.js_login').hide();
                $('.login-bg').hide();
                $("#mask").css({ display: 'none' });
            });
        };
        H_login.loginForm = function () {
        };
        H_login.run = function () {
            this.closeLogin();
            this.openLogin();;
            this.loginForm();
        };
        H_login.run();
    });
    function switchTag(tag, content, k, n, stylea, styleb) {
        for (i = 1; i <= n; i++) {
            if (i == k) {
                document.getElementById(tag + i).className = stylea;
                document.getElementById(content + i).className = "showbox"

            } else {
                document.getElementById(tag + i).className = styleb;
                document.getElementById(content + i).className = "hidden"
            }
        }
    };
    function kaoshi110_ajaxlogin() {
        var username = $("#logusername");
        var usernameValue = $("#logusername").val();
        var password = $("#logpassword");
        var passwordValue = $("#logpassword").val();
        $.post("/AjaxControls/AjaxLoginPage.ashx", { Action: "post", OperatingMode: "login", UserName: usernameValue, Password: passwordValue },
            function (data, textStatus) {
                if (data.result == "ok") {
                    window.location.reload();
                }
                else {
                    alert(data.result);
                }
                return false;
            }, "json");
        return false;
    }

    function confirmationusername() {
        var username = $('#logusername').val();
        $.post("/AjaxControls/confirmationusername.ashx", { Action: "post", UserName: username },
            function (data, textStatus) {
                if (data.result == "ok") {
                    $('#username_info').html("用户名合法"); $('#username_errinfo').html("");
                    $('#logusername').css('background', "white");
                }
                else {
                    $('#username_errinfo').html(data.result); $('#username_info').html("");
                    $('#logusername').css('background', "red");
                }
                return false;
            }, "json");
        return false;
    }

    function kaoshi110_ajaxzhuce() {
        var usernameValue = $("#UserName").val();
        var passwordValue = $("#Password").val();
        var realNameValue = $("#RealName").val();
        var telephoneValue = $("#Telephone").val();
        var emailValue = $("#Mail").val();
        $.post("/AjaxControls/AjaxLoginPage.ashx", { Action: "post", OperatingMode: "zhuce", UserName: usernameValue, Password: passwordValue, RealName: realNameValue, Telephone: telephoneValue, Mail: emailValue },
            function (data, textStatus) {
                if (data.result == "ok") {
                    window.location.reload();
                }
                else {
                    alert(data.result);
                }
                return false;
            }, "json");
        return false;
    }
</script>

<!--注册登录样式 开始-->
<style type="text/css">
    .mask{margin:0;padding:0;border:none;width:100%;height:100%;background:#333;opacity:0.6;filter:alpha(opacity=60);z-index:9999;position:fixed;top:0;left:0;display:none;}
    .js_login h1, h2, h3, h4, h5, h6, p, ul, li {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .js_login {
        display: none;
        position: fixed;
        opacity: 1;
        z-index: 11000;
        left: 50%;
        margin-left: -350px;
        top: 138px;
    }

    .js_login a {
        color:#4388f9;
        text-decoration: none;
    }

    .sub_btn1 { /*position:absolute; right:0px; top:50px;*/
        width:105px;
        height:35px;
        display: inline-block;
        zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
        *display: inline;
        vertical-align: baseline;

        outline: none;
        cursor: pointer;
        text-align: center;
        font: 11px/100% Arial, Helvetica, sans-serif;
        text-shadow: 0 1px 1px rgba(0,0,0,.6);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        box-shadow: 0 1px 2px rgba(0,0,0,.2);
        color: #ffffff;
        border: solid 1px #b2b7ac;

        background: #45ce81;
        background: -webkit-gradient(linear, left top, left bottom, from(#41d478), to(#45ce81));
        background: -moz-linear-gradient(top, #41d478, #45ce81);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#41d478', endColorstr='#45ce81');
    }

    .sub_btn1:hover {
        background: #64991e;
        background: -webkit-gradient(linear, left top, left bottom, from(#45ce81), to(#1e9854));
        background: -moz-linear-gradient(top, #45ce81, #1e9854);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#45ce81', endColorstr='#1e9854');
    }

    .inputbg {
        height: 40px;
        width: 324px;
        margin: 0 auto;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #eee;
        text-align: left;
        color: #333;position:relative;
    }
    .inputbg i {
        width: 45px;
        height: 40px;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        background: url('http://static.mingtian.com/pc/app/img/people.png') center center no-repeat #41d478;
    }
    i.inputbgi2 {
        background-image: url('http://static.mingtian.com/pc/app/img/suo.png');
    }
    #username * {
        vertical-align: middle;
    }

    .inputsub {
        outline: 0;
        font-family: Tahoma,Geneva,sans-serif;
        font-size: 18px;
        width: 270px;
        float: left;
        border: none;
        text-align: left;
        color: #333;
        padding: 9px 5px 9px 50px;
        background: none;
        overflow: hidden;padding-left:50px;
    }

    .buttons {
        width: 324px;
        margin: 0 auto;
        margin-top: 20px;
        text-align: left;
    }
    #login .buttons{margin-bottom:30px;}
    #login-submokaoba {
        width: 324px;
        height: 45px;
    }

    #qql {
        float: right;
    }

    .reg {
        padding: 20px;
        margin: 0 auto;
        width: 280px;
    }

    #login {
        margin-top: 20px;
    }

    .hidden {
        display: none;
    }

    .js_login {
        position: absolute;
        width: 700px;
        background: #fff;
        display: none;
        color: #999;
    }

    .js_login .js_title {
        overflow: hidden;
        height: 42px;
        background: #f9f9f9 url(http://www.bi126.com/images/con2_title_bg.png) repeat-x;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ebebeb;
    }

    .js_login .js_title span {
        float: right;
        line-height: 40px;
        padding: 0 9px;
        cursor: pointer;
        font-family: "";
        font-size: 30px;
    }

    .js_login .js_title span:hover {
        color: #555;
    }

    .js_login .js_title li {
        float: left;
        width: 130px;
        text-align: center;
        font-family: "微软雅黑";
        font-size: 18px;
        cursor: pointer;
        height: 43px;
    }

    .js_login .js_title li a {
        float: left;
        width: 130px;
        text-align: center;
    }

    .js_login .js_title li a:hover {
    }

    .conxk1 {
        border-top: 3px solid #15B300;
        border-right: 1px solid #dfdfdf;
        background: #fff;
        height: 39px;
        line-height: 39px;
        color: #11B200;
    }

    .conxk1 a {
        color: #11B200;
    }

    .conxk1 a:hover {
        color: #11B200;
        text-decoration: none;
    }

    .conxk2 {
        border-right: 1px solid #dfdfdf;
        height: 39px;
        line-height: 39px;
        padding-top: 3px;
        color: #646464;
    }

    .conxk2 a {
        color: #646464;
    }

    .conxk2 a:hover {
        color: #646464;
        text-decoration: none;
    }

    .js_login .js_content {
        overflow: hidden;
        padding: 13px 15px 0;
        background: #fff;
        border: 1px solid #ccc;
        border-top-width: 0px;
    }

    .js_login .js_content .de_list {
        width: 100%;
        padding-top: 12px;
    }

    .js_login .js_content a:visited {
        color: blue;
    }

    .js_login .js_content a:hover {
        color: red;
        text-decoration: underline;
    }

    .Reg-input {
        display: block;
        clear: both;
        padding: 5px 0;
    }
    div#register {
        color: #666;
    }
    .Reg-input li {
        display: inline;
        float: left;
    }

    .Reg-input .input-text {
        width: 324px;
        height: 25px;
        border: 1px solid #ccc;
        outline: none;
        border-radius: 2px;
    }

    .input-text:focus {
        border: 1px solid #339933;
    }

    .Reg-input .Reg-text {
        width: 200px;
        text-align: right;
        font-size: 14px;
    }

    .Reg-input .input_text {
        width: 70px;
        float: left;
    }

    .js_login #checkbox {
        text-align: left;
    }

    .js_login #errmsg {
        color: red;
    }

    .js_login .sub_btn1 {
        font-size: 20px;
    }
    #register .buttons{margin-bottom:10px;}
    #register .sub_btn1{width: 324px;
        margin-left: 28px;}

    #lean_overlay {
        position: fixed;
        z-index: 100;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 100%;
        background: #000;
        display: none;
    }
</style>
<!--注册登录样式 结束-->

<!--顶部登录/注册 开始-->
<div class="minNav">
    <div class="navInner">
        <span class="homeIco">
            <a class="myTest" href="" rel="nofollow">会员中心</a> |
            <a class="sina" href="" target="_blank" rel="nofollow">官方微博</a>
        </span>
        <span class="login" id="ks110_LoginView">欢迎来到在线考试(kaoshi.com)
            <a href="javascript:void(0);" class="login-header" rel="nofollow">登录</a>
            <a href="javascript:void(0);" class="zhuce-header" rel="nofollow">免费注册</a>
        </span>
        <span class="login" style="display:none;" id="ks110_LoginStatus">
            <strong><span id="ks110_CurrentUser"></span></strong>，您好。欢迎来到在线考试(kaoshi.com)
            <a id="ks110_LoginOut" href="" rel="nofollow">[点此退出]</a>
        </span>
    </div>
</div>
<!--顶部登录/注册 结束-->

<!--logo图 开始-->
<div class="banner b1">
    <a class="logo" href="">
        <img src="../../../../thinkphp/Public/home/img/logo1.jpg" width="100%" height="100px" title="在线考试" alt="在线考试logo">
    </a>
</div>
<!--logo图 结束-->

<!--导航栏 开始-->
<div class="navBar">
    <ul class="nav clearfix">
        <li class="m">
            <h3><a href="/thinkphp/home/index/index">网站首页</a></h3>
        </li>
        <li class="s">|</li>
        <li class="m">
            <h3><a href="">在线测试</a></h3>
        </li>
        <li class="s">|</li>
        <li class="m ">
            <h3><a href="/thinkphp/home/list/index">初中测试</a></h3>
            <ul class="sub">
                <li><a href="/thinkphp/home/list/index">语文</a></li>
                <li><a href="/thinkphp/home/list/index">数学</a></li>
            </ul>
        </li>
        <li class="s">|</li>
        <li class="m">
            <h3><a href="/thinkphp/home/list/index">高中测试</a></h3>
            <ul class="sub">
                <li><a href="/thinkphp/home/list/index">物理</a></li>
                <li><a href="/thinkphp/home/list/index">化学</a></li>
            </ul>
        </li>
        <li class="s">|</li>
        <li class="m">
            <h3><a href="/thinkphp/home/list/index">大学测试</a></h3>
            <ul class="sub">
                <li><a href="/thinkphp/home/list/index">高数</a></li>
                <li><a href="/thinkphp/home/list/index">概率论</a></li>
            </ul>
        </li>
        <li class="s">|</li>
        <li class="m">
            <h3><a href="">关于我们</a></h3>
        </li>
        <li class="s">|</li>
        <li class="m">
            <h3><a href="">联系我们</a></h3>
        </li>
        <li class="block"></li><!-- 滑动块 -->
    </ul>
</div>
<script type="text/javascript">
    (function(){
        var ind = 0; //初始位置
        var nav= jQuery(".nav");
        var init = jQuery(".nav .m").eq(ind);
        var block = jQuery(".nav .block"); //滑块
        block.css({"left":init.position().left-3}); //初始化滑块位置
        nav.hover(function(){},function(){ block.animate({"left":init.position().left-3},100); }); //移出导航滑块返回
        jQuery(".nav").slide({
            type:"menu", //效果类型
            titCell:".m", // 鼠标触发对象
            targetCell:".sub", // 效果对象，必须被titCell包含
            delayTime:300, // 效果时间
            triggerTime:0, //鼠标延迟触发时间
            returnDefault:true,//on返回初始位置
            defaultIndex:ind,//初始位置
            startFun:function(i,c,s,tit){ //控制当前滑块位置
                block.animate({"left":tit.eq(i).position().left-3},100);
            }
        });
    })()
</script>
<!--导航栏 结束-->

<!--轮播图 开始-->
<div class="slider">
    <div class="bd">
        <ul>
            <li><img width="100%" height="300px" src="../../../../thinkphp/Public/home/img/1.jpg" /></li>
            <li><img width="100%" height="300px" src="../../../../thinkphp/Public/home/img/2.jpg" /></li>
            <li><img width="100%" height="300px" src="../../../../thinkphp/Public/home/img/3.jpg" /></li>
            <li><img width="100%" height="300px" src="../../../../thinkphp/Public/home/img/4.jpg" /></li>
        </ul>
    </div>
    <!--<div class="hd"><ul><li></li><li></li></ul></div>-->
    <div class="timer"></div><!-- 进度条 -->
</div>

<script type="text/javascript">
    jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
        mouseOverStop:false,/* 鼠标移到容器层继续播放*/
        /* 控制进度条 */
        startFun:function(){
            var timer = jQuery(".slider .timer");
            timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },2500);
        }
    });
</script>
<!--轮播图 结束-->
<!--注册登录 开始-->
<div id="js_login" class="js_login" style="display: none;">
    <div class="js_title">
        <ul>
            <li class="conxk1" id="_xka1" onclick="switchTag('_xka','_xka_list',1,2,'conxk1','conxk2');">
                用户登录
            </li>
            <li class="conxk2" id="_xka2" onclick="switchTag('_xka','_xka_list',2,2,'conxk1','conxk2');">
                快速注册
            </li>
        </ul>			<span class="close-login">×</span>
    </div>
    <div class="js_content">
        <div class="con_dak fixed clear">
            <!----------login start------>
            <div id="_xka_list1" class="showbox">
                <div class="de_list">
                    <form action="/thinkphp/home/login/dologin" method="post">
                        <div id="login">
                            <div class="inputbg" id="logtext"><i></i>
                                <input name="name" id="logusername" type="text" placeholder="输入用户名" class="inputsub">
                            </div>
                            <div class="inputbg" id="pass"><i class="inputbgi2"></i>
                                <input name="password" placeholder="输入密码" type="password" id="logpassword" class="inputsub">
                            </div>
                            <div class="buttons">
                                <input type="submit" class="sub_btn1" id="login-submokaoba" value="登   录">
                            </div>
                            <div class="clr"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!--------login end--------->

            <!--------register start--------->
            <div id="_xka_list2" class="hidden">
                <div class="de_list">
                    <form action="/thinkphp/home/login/doregister" method="post" enctype="multipart/form-data" name="userinfoform" id="userinfoform">
                        <!--权限 1&#45;&#45;普通用户-->
                        <input type="hidden" name="auth" value="1">
                        <!--状态 1&#45;&#45;开启-->
                        <input name="status" type="hidden" value="1">
                        <div id="register">
                            <ul class="Reg-input">
                                <li class="Reg-text">用户名：</li>
                                <li><input name="name" id="UserName" type="text" class="input-text" required=""> <span class="UserName"></span></li>
                            </ul>
                            <ul class="Reg-input">
                                <li class="Reg-text">密码：</li>
                                <li><input name="password" onblur="CheckReg('Password', this.value)" type="password" id="Password" class="input-text" required=""> <span class="Password"></span></li>
                            </ul>
                            <ul class="Reg-input">
                                <li class="Reg-text">重复密码：</li>
                                <li><input name="repassword" onblur="CheckReg('repassword',this.value)" type="password" id="repassword" class="input-text" required=""> <span class="repassword"></span></li>
                            </ul>
                            <ul class="Reg-input">
                                <li class="Reg-text">手机号码：</li>
                                <li><input name="phone" onblur="CheckReg('Telephone', this.value)" type="text" id="Telephone" class="input-text" required=""> <span class="Telephone"></span></li>
                            </ul>
                            <ul class="Reg-input">
                                <li class="Reg-text">E-mail：</li>
                                <li><input name="email" onblur="CheckReg('Mail', this.value)" type="text" id="Mail" class="input-text" required=""> <span class="Mail"></span></li>
                            </ul>
                            <ul class="Reg-input">
                                <li class="Reg-text">&nbsp;</li>
                                <li id="checkbox"><input type="checkbox" id="checkin" onclick="checkpass('all')"> 我已阅读并接受《<a href="http://www.mokaoba.com/usercenter/helparticle.html" target="_blank">服务条款</a>》</li>
                            </ul>
                            <div style="clear:both"></div>
                            <div class="buttons">
                                <input type="submit" class="sub_btn1" id="Reg-submokaoba" value="注   册">&nbsp;&nbsp;<span id="checkreg"></span>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!--------register end--------->
        </div>
    </div>
</div>
<!--注册登录 结束-->
<!--header头 结束-->

<!--主体内容 开始-->
<div class="lc">
    <div><span class="n1">1.选择试题</span><span class="n2">2.注册/登陆</span><span class="n3">3.开始答题</span><span class="n4">4.提交试卷</span><span class="n5">5.查看成绩</span><span class="n6">6.答案解析</span></div>
</div>
<div class="bread">
    <span>您的位置：</span>
    <a title="在线考试中心" href="/thinkphp/home/index/index">在线考试中心</a>&nbsp;&gt;&gt;
    <a title="试卷列表" href="">试卷列表页</a>&nbsp;&gt;&gt;
    <a title="<?php echo ($test['sname']); ?>" href=""><?php echo ($test['sname']); ?></a>&nbsp;&gt;&gt; 正在考试
</div>
<div class="testing_content" style="width:958px;margin:0 auto">
    <div class="title" style="width:958px">
        <h4>
            <span id="lblpapername"><?php echo ($test['sname']); ?></span>
        </h4>
    </div>
    <div class="h15">
    </div>
    <div class="content" style="border: 0px;">
        <div class="h15"></div>
        <div class="papers_illustrate">
            <div class="illustrate_t">试卷说明：</div>
            <div class="illustrate_c">
                <ul>
                    <li>卷面总分：<span class="orange bold">150.00</span>分</li>
                    <li>合格分数线：<span class="orange bold">90.00</span>分</li>
                    <li>答题时间：<span class="orange bold">120</span>分钟</li>
                    <li>试卷来源：模考吧</li>
                    <li>参考人数：<span class="orange bold">5</span>人</li>
                    <li>试卷年份：<span class="orange bold">2016</span>&nbsp;年</li>
                </ul>
            </div>
        </div>
        <div class="h25"></div>
        <div id="con_one_0">
            <div id="dt_xt_content_0" style="display: ;">
                <div class="style_dt_desc">判断题</div>
                <div class="container">
                    <div id="921016_itemPageIndex_1">
                        <?php if(is_array($ti)): foreach($ti as $key=>$vo): ?><div class="question border_t_g_r" id="xt_921016_870428" style="padding-left: 10px; padding-right: 10px; padding-top: 10px; border: 1px solid rgb(255, 255, 255);" >
                            <div class="ques_title">
                                <strong class="xt_index">第<span>1</span>题</strong>
                                <p><?php echo ($vo['title']); ?></p>
                                <input type="hidden" name="id" value="<?php echo ($vo['id']); ?>">
                            </div>
                            <div class="choice"></div>
                            <div class="h10"></div>
                            <div class="selectanswer">
                                <span class="xuanze_txt">[选择答案]</span>
                                <ul class="zimu">
                                    <li><input type="radio" name="<?php echo ($vo['id']); ?>" value="1"> √ </li>
                                    <li><input type="radio" name="<?php echo ($vo['id']); ?>" value="2"> X </li>
                                </ul>
                            </div>
                            <div class="h10"></div>
                        </div><?php endforeach; endif; ?>
                        <div class="h25"></div>
                        <div class="cut_question">
                            <div class="line"></div>
                        </div>
                        <div class="h25"></div>
                        <div class="hand_paper">
                            <input type="image" name="" id="ImageButton1" class="curPointer" src="../../../../thinkphp/Public/home/img/hand_paper.png"  style="height: 50px; width: 182px; border-width: 0px;">
                        </div>
                        <div class="h25"></div>
                        <div class="testing_banner"></div>
                        <div class="h25"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--主体内容 结束-->

<hr width="100%" color="red">

<!--footer尾部 开始-->
<div class="footer">
    <p>
        <a href="" rel="nofollow">联系我们</a>&nbsp;&nbsp;
        <a href="" rel="nofollow">版权说明</a>&nbsp;&nbsp;
        <a href="" rel="nofollow">帮助中心</a>
    </p>
    <p>湘ICP备11011645号</p>
    <p>
        友情链接:
        <a href="">WPS官方网站</a>
        <a href="">听课室网</a>
        <a href="">考试在线网</a>
        <a href="">法律知识</a>
        <a href="">睡前故事</a>
        <a href="">候车亭</a>
        <a href="">SEO技术教程</a>
        <a href="">SEO研究中心</a>
        <a href="">网络营销</a>
        <a href="">生活社区</a>
        <a href="">汕头i尚网</a>
        <a href="">PPT模板</a>
        <a href="">聊城钢管厂家</a>
        <a href="">做题室</a>
    </p>
</div>
<!--footer尾部 结束-->
</body>
</html>