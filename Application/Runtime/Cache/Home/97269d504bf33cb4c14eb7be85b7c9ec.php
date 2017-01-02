<?php if (!defined('THINK_PATH')) exit();?>登录页面  <a href="/thinkphp/home/login/dologin">执行登录</a>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>在线考试登录</title>
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/mokaoba.css">
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/daohanglan.css">
    <!--<link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/sy.css">-->
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
<!--header头 开始-->
<!--顶部登录/注册 开始-->
<div class="minNav">
    <div class="navInner">
        <span class="homeIco">
            <a class="myTest" href="" rel="nofollow">会员中心</a> |
            <a class="sina" href="" target="_blank" rel="nofollow">官方微博</a>
        </span>
        <span class="login" id="ks110_LoginView">欢迎来到在线考试(kaoshi.com)
            <a href="/thinkphp/home/login/index" class="login-header" rel="nofollow">登录</a>
            <a href="/thinkphp/home/login/register" class="zhuce-header" rel="nofollow">免费注册</a>
        </span>
        <span class="login" style="display:none;" id="ks110_LoginStatus">
            <strong><span id="ks110_CurrentUser"></span></strong>，您好。
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
<!--header头 结束-->

<!--主体内容 开始-->
<!--<div class="mainContent m1"> &lt;!&ndash;主体内容&ndash;&gt;-->
    <!--<div class="colum0 colum1" style="width:962px">-->
        <!--<div class="ck border" style="border-color: rgb(255, 255, 255) rgb(255, 255, 255) rgb(239, 239, 239); border-width: 0px 2px 1px; border-style: solid; padding-bottom: 11px; padding-top: 14px;background-color:#1dc5a3">-->
            <!--<div style="padding:0px 0px;padding-bottom:0px;">-->
                <!--<div style="padding:0px 0px;padding-bottom:0px;float:right"><a href="/thinkphp/home/list/index">更多...</a></div>-->
                <!--<h2><span><strong>初中测试</strong></span></h2>-->
            <!--</div>-->
            <!--<div>-->
                <!--<?php if(is_array($test)): foreach($test as $key=>$vo): ?>-->
                    <!--<p>[基础测试]<a href="/thinkphp/home/detail/index?id=<?php echo ($vo['id']); ?>"><?php echo ($vo['sname']); ?></a></p>-->
                <!--<?php endforeach; endif; ?>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<!--主体内容 结束-->

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