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
                            <input name="hdStopTimes" type="hidden" id="hdStopTimes" value="0">
                            <input id="LastTime" name="LastTime" value="9" type="hidden">
                            <input type="image" name="ImageButton1" id="ImageButton1" class="curPointer" src="../../../../thinkphp/Public/home/img/hand_paper.png"  style="height: 50px; width: 182px; border-width: 0px;">
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