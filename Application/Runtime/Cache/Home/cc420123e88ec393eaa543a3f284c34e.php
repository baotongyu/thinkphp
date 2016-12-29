<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>在线考试试卷列表</title>
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
            <a href="" class="login-header" rel="nofollow">登录</a>
            <a href="" class="zhuce-header" rel="nofollow">免费注册</a>
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
<!--header头 结束-->

<!--主体内容 开始-->
<div class="lc">
    <div><span class="n1">1.选择试题</span><span class="n2">2.注册/登陆</span><span class="n3">3.开始答题</span><span class="n4">4.提交试卷</span><span class="n5">5.查看成绩</span><span class="n6">6.答案解析</span></div>
</div>
<div class="bread">
    <span>您的位置：</span>
    <a title="" href="/">在线考试中心</a>&nbsp;&gt;
    <a href="">医学</a>&nbsp;&gt;
    <a href="">全国卫生专业技术资格考试(中初级)</a>&nbsp;&gt; 放射医学技师
</div>
<div class="mainContent m2"> <!--主体内容-->
    <div class="mainList">
        <div class="nav">
            <a href="" class="on"><strong>全部试题</strong></a>
            <a href=""><strong>模拟试题</strong></a>
            <a href=""><strong>历年真题</strong></a>
            <a href=""><strong>预测题</strong></a>
        </div>
        <div class="area">
            <div class="hy">
                <a href="">相关专业知识</a>
                <a href="">基础知识</a>
                <a href="">专业实践能力</a>
                <a href="">专业知识</a>
            </div>
        </div>
        <div class="sjTitle">
            <div class="cs">
                <span>试卷预览</span>
                <span>进入考试</span>
            </div>
            <div class="bt">
                <span>试卷标题</span>
            </div>
        </div>
        <div class="sjList">
            <ul>
                <?php if(is_array($test)): foreach($test as $key=>$vo): ?><li>
                    <div>
                        <div class="newtitle">
                            <span class="mKemu">
                                <a href="" target="_blank">[专业实践能力]</a>
                            </span>
                            <a class="mTitle" href="/thinkphp/home/detail/index?id=<?php echo ($vo['id']); ?>" target="_blank"><?php echo ($vo['sname']); ?></a>
                        </div>
                        <span class="time"><a href="/thinkphp/home/detail/index?id=<?php echo ($vo['id']); ?>" target="_blank" style="color:#c00;">查看试题</a></span>
                        <div class="paper_btn">
                            <a href="" target="_blank" class="exam_btn">进入考试</a>
                        </div>
                    </div>
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="page">
                <div id="AspNetPager1" class="Pager">
                    <a disabled="disabled" style="margin-right:5px;">首页</a>
                    <a disabled="disabled" style="margin-right:5px;">前一页</a>
                    <span style="margin-right:5px;font-weight:Bold;color:red;">[1]</span>
                    <a href="" style="margin-right:5px;">[2]</a>
                    <a href="" style="margin-right:5px;">下一页</a>
                    <a href="" style="margin-right:5px;">末页</a>
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