<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>考试在线系统</title>
    <link rel="stylesheet" type="text/css" href="../../../../thinkphp/Public/home/css/css.css">
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="../../../../thinkphp/Public/home/js/jquery1.42.min.js"></script>
    <style type="text/css">
        /*导航栏样式 开始*/
        *{margin:0; padding:0; list-style:none; }
        body{ background:#fff; font:normal 12px/22px 宋体;  }
        img{ border:0;  }
        a{ text-decoration:none; color:#333;  }
        a:hover{ color:#FF8400;  }
        .js{width:90%; margin:10px auto 0 auto; }
        .js p{ padding:5px 0; font-weight:bold; overflow:hidden;  }
        .js p span{ float:right; }
        .js p span a{ color:#f00; text-decoration:underline;   }
        .js textarea{ height:190px;  width:98%; padding:5px; border:1px solid #ccc; border-top:2px solid #aaa;  border-left:2px solid #aaa;  }

        .clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
        .navBar{  position:relative; z-index:1; padding-left:10px;   height:60px; line-height:60px; background:url(img/line.gif) repeat-x 0 bottom #fff; color:#333;   }
        .nav{ position:relative; width:980px; margin:0 auto;  font-family:"Microsoft YaHei",SimSun,SimHei; font-size:14px; }
        .nav a{ color:#333;  }
        .nav h3{ font-size:100%; font-weight:normal;   }
        .nav .m{ float:left;  position:relative; z-index:1; }
        .nav .s{ float:left; width:3px; text-align:center; color:#D4D4D4; font-size:12px; }
        .nav h3 a{ display:block; width:124px; text-align:center;   font-weight:bold;  }
        .nav .sub{ display:none; /*默认隐藏*/  position:absolute; left:-3px; top:60px; z-index:1; width:128px; border:1px solid #E6E4E3; border-top:0;  background:#fff; }
        .nav .sub li{ text-align:center; padding:0 8px; margin-bottom:-1px;   }
        .nav .sub li a{ display:block;  border-bottom:1px solid #E6E4E3; padding:8px 0; height:28px; line-height:28px; color:#666;   }
        .nav .sub li a:hover{ color:#FE7700;   }
        .nav .block{ height:3px; width:130px; background:#FE7700; position:absolute; left:0; top:57px; overflow:hidden;  }
        /*导航栏样式 结束*/

        /*轮播图样式 开始*/
        *{margin:0; padding:0; list-style:none; }
        body{ background:#fff; font:normal 12px/22px 宋体;  }
        img{ border:0;  }
        a{ text-decoration:none; color:#333;  }
        a:hover{ color:#1974A1;  }
        .js{width:90%; margin:10px auto 0 auto; }
        .js p{ padding:5px 0; font-weight:bold; overflow:hidden;  }
        .js p span{ float:right; }
        .js p span a{ color:#f00; text-decoration:underline;   }
        .js textarea{ height:100px;  width:98%; padding:5px; border:1px solid #ccc; border-top:2px solid #aaa;  border-left:2px solid #aaa;  }

        .focusBox { position: relative; width:960px; height:450px; overflow: hidden; }
        .focusBox .pic{ position:relative; z-index:0; }
        .focusBox .pic img { width:960px; height:450px; display: block; }
        .focusBox .hd { width:100%; position: absolute; bottom: 10px; text-align: center; font-size:0; z-index:1; }
        .focusBox .hd li{margin: 0 5px; background: url(images/dot.png) no-repeat 0 -16px; height: 16px; overflow: hidden; width: 16px; cursor: pointer;
            display:inline-block; *display:inline; zoom:1;  _background: url(images/dot8.png) no-repeat 0 -16px;
        }
        .focusBox .hd .on{ background-position:0 0; }
        .focusBox .prev,
        .focusBox .next { width: 60px; height: 90px; margin: -60px 0 0; display: none; background: url(images/ad_ctr.png) no-repeat 0 0; position: absolute; top: 50%; z-index: 10; cursor: pointer; text-indent: -9999px; filter:alpha(opacity=20);opacity:0.2;  }
        .focusBox .prev { left: 0; }
        .focusBox .next { background-position: 0 -90px; right: 0; }
        .focusBox .prev:hover,
        .focusBox .next:hover { filter:alpha(opacity=50) !important;opacity:0.5 !important;  }
        /*轮播图样式 结束*/
    </style>
</head>
<body>
    <!--header头 开始-->
    <div class="header">
        <div class="topR" id="topBar">
            <div class="wrapper">
                <a href="" class="topR_logo"><img width="200px" height="56px" src="../../../../thinkphp/Public/home/img/top_logo.png" alt=""></a>
                <div id="header_bar">
                    <div class="topR_login">
                        <a href="/thinkphp/home/login/index">马上登录</a>
                        <a href="/thinkphp/home/login/register">注册</a>
                    </div>
                </div>
                <div id="aside-tips"></div>
            </div>
        </div>
        <!--导航栏 开始-->
        <div class="mainNav mb20 bc">
            <!--<div class="wrapper">-->
                <div class="navBar">
                    <ul class="nav clearfix">
                        <li class="m">
                            <h3><a href="/thinkphp/home/index/index">网站首页</a></h3>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">在线考试</a></h3>
                            <ul class="sub">
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                                <li><a href="#">如何使用</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m "><!-- 当前频道添加on -->
                            <h3><a href="">初 中</a></h3>
                            <ul class="sub">
                                <li><a href="#">查看参数</a></li>
                                <li><a href="#">查看参数</a></li>
                                <li><a href="#">查看参数</a></li>
                                <li><a href="#">查看参数</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">高 中</a></h3>
                            <ul class="sub">
                                <li><a href="#">基础效果</a></li>
                                <li><a href="#">基础效果</a></li>
                                <li><a href="#">基础效果</a></li>
                                <li><a href="#">基础效果</a></li>
                            </ul>
                        </li>
                        <li class="s">|</li>
                        <li class="m">
                            <h3><a href="">大 学</a></h3>
                            <ul class="sub">
                                <li><a href="#">扩展效果</a></li>
                                <li><a href="#">扩展效果</a></li>
                                <li><a href="#">扩展效果</a></li>
                                <li><a href="#">扩展效果</a></li>
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
            <!--</div>-->
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
        <div class="focusBox" style="margin:0 auto">
            <ul class="pic">
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/1.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/2.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/3.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/4.jpg"/></a></li>
                <li><a href=""><img src="../../../../thinkphp/Public/home/img/5.jpg"/></a></li>
            </ul>
            <a class="prev" href="javascript:void(0)"></a>
            <a class="next" href="javascript:void(0)"></a>
            <ul class="hd">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <script type="text/javascript">
            /*鼠标移过，左右按钮显示*/
            jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
            /*SuperSlide图片切换*/
            jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
        </script>
        <!--轮播图 结束-->
    </div>
    <!--header头 结束-->

    <!--主体内容 开始-->
    <!--<div class="secItem mb20 bc clearfix">-->
        <!--<div class="fl">-->
            <!--<section class="index_item">-->
                <!--<div class="i_title clearfix">-->
                    <!--<span class="t_txt fl">猜你喜欢</span>-->
                    <!--<a href="javascript:;" id="changecourses" class="t_more fr"><i class="ico-refresh"></i>换一换</a>-->
                <!--</div>-->
                <!--<ul class="i_list clearfix" id="gexinghua">-->
                    <!--<li>-->
                        <!--<div class="pic index-like">-->
                            <!--<a href="#" class="link" style="display: none;">-->
                                <!--<img src="//wsres.chuanke.com/sites/www/v2/images/index/pic/pic_128x96.jpg">-->
                                <!--<i class="ico-index-play"></i>-->
                            <!--</a>-->

                            <!--<div class="play-box">-->
                                <!--<div class="video-oper">-->
                                    <!--&lt;!&ndash; 播放加上类名 ico-video-play &ndash;&gt;-->
                                    <!--<a id="playBtn" href="javascript:void(0);" onclick="onPlay()" class="fl ico-video-out ico-video-play"></a>-->
                                    <!--<span id="playTime" class="fl time">00:00/00:00</span>-->
                                    <!--<div class="fr volume">-->
                                        <!--&lt;!&ndash; 静音加上类名 ico-video-mute &ndash;&gt;-->
                                        <!--<a id="soundBtn" href="javascript:void(0);" onclick="onMute()" class="ico-video-sound"></a>-->
                                        <!--<p class="volume-bg">-->
											<!--<span id="volumeBtn" onclick="onVolume(event)" class="volume-bar">-->
												<!--<span id="percent" class="percent" style="height:50%;">-->
													<!--<i id="sliderBtn" class="ico-video-volume" onmousedown="onMouseDown(event)"></i>-->
												<!--</span>-->
											<!--</span>-->
                                        <!--</p>-->
                                    <!--</div>-->
                                <!--</div>-->

                                <!--<a href="//www.chuanke.com/1879267-105818.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank" class="index-btn-learn">进入完整学习</a>-->
                                <!--<span class="bar-box">-->
									<!--<i id="playProgress" class="speed" style="width: 0%"></i>-->
								<!--</span>-->
                            <!--</div>-->

                            <!--<div id="mediaspace" style="width: 160px; height: 120px; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); display: table; opacity: 1;"><p style="vertical-align: middle; text-align: center; display: table-cell; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 15px; line-height: 20px; font-family: Arial, Helvetica, sans-serif;">Error loading player:<br> No playable sources found</p></div>-->
                        <!--</div>-->


                        <!--<div class="c_name">-->
                            <!--<a title="会计证从业资格考试辅导视频课程【2016新大纲,10000学员购买】" href="//www.chuanke.com/1879267-105818.html?statistics_channel_id=2082&amp;statistics_uid=33" id="free_course" target="_blank">会计证从业资格考试辅导视频课程【2016新大纲,10000学员购买】</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">11.1万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1013047-154308.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank"><img src="//wsimg.chuanke.com/course/2016-11/01/538a1df46331c2b692f49a16635fee18.jpg"></a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a title="ACE《精品公开课》零基础入门轻松直达流利口语" href="//www.chuanke.com/1013047-154308.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank">ACE《精品公开课》零基础入门轻松直达流利口语</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">8.4万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1879267-105816.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank"><img src="//wsimg.chuanke.com/dxt/./1409173623_82336.jpeg"></a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a title="大学英语四级全套辅导课程-对啊网【最新！完整！免费！】" href="//www.chuanke.com/1879267-105816.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank">大学英语四级全套辅导课程-对啊网【最新！完整！免费！】</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">11.4万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1036575-93444.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank"><img src="//wsimg.chuanke.com/course/2013-11/05/597a5e0600cf8937b623e4d78ca9b1cf.gif"></a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a title="韩语零基础入门(经典课程)" href="//www.chuanke.com/1036575-93444.html?statistics_channel_id=2082&amp;statistics_uid=33" target="_blank">韩语零基础入门(经典课程)</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">28.0万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<span id="courseids" style="display: none;">105818,154308,105816,93444</span>-->
                <!--</ul>-->
            <!--</section>-->
            <!--<section class="index_item">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">精品课程</span>-->
                    <!--<div class="t_sort">-->

                        <!--<a href="//www.chuanke.com/course/72351176527446016_____.html" target="_blank">编程语言</a>&nbsp;&nbsp;&nbsp;-->

                        <!--<a href="//www.chuanke.com/course/72351236791205888_____.html" target="_blank">工具软件</a>&nbsp;&nbsp;&nbsp;&nbsp;-->

                        <!--<a href="//www.chuanke.com/course/72354462177427456_____.html" target="_blank">外语学习</a>&nbsp;&nbsp;&nbsp;&nbsp;-->

                        <!--<a href="//www.chuanke.com/course/72365465883639808_____.html" target="_blank">职业资格</a>-->

                    <!--</div>-->
                    <!--<a href="//www.chuanke.com/course/index.html" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<ul class="i_list clearfix">-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/4272850-204693.html" target="_blank" kk-event-id="516" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--<img src="//wsimg.chuanke.com/course/2016-12/05/c6aec640a73cf207fc83804a78cb724d.thumb.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/4272850-204693.html" target="_blank" kk-event-id="516" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--几分钟从小白到鼠绘大师							</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail clearfix">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">2.1万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1270728-87572.html" target="_blank" kk-event-id="517" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--<img src="//wsimg.chuanke.com/course/2015-04/01/ceced114f903ecd245a9624172b7cd0e.thumb.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/1270728-87572.html" target="_blank" kk-event-id="517" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--PS转手绘创意表现							</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail clearfix">-->
                            <!--<span class="fl num"><em class="money">¥</em>5.00</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">1.2万</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1238993-126885.html" target="_blank" kk-event-id="518" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/84c32748c0babd4c2c40a0b20c0824d0.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/1238993-126885.html" target="_blank" kk-event-id="518" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--看韩剧学韩语							</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail clearfix">-->
                            <!--<span class="fl num"><em class="money">¥</em>9.90</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">6639</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/7202725-182212.html" target="_blank" kk-event-id="519" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--<img src="//wsimg.chuanke.com/course/2016-07/18/2634076312f6ff2c0d5a8903fd25a697.thumb.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/7202725-182212.html" target="_blank" kk-event-id="519" kk-event-ext="pid=104&amp;display=153&amp;area=493">-->
                                <!--雅思写作解释类题目							</a>-->
                        <!--</div>-->
                        <!--<div class="c_detail clearfix">-->
                            <!--<span class="fl free">免费</span>-->
                            <!--<span class="stu_counts"><i class="c_1ab177">119</i>次学习</span>-->
                        <!--</div>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</section>-->
            <!--&lt;!&ndash; 免费课 Start &ndash;&gt;-->
            <!--<section class="index_item index-item-free">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">免费好课</span>-->
                    <!--<div class="t_sort">-->

                    <!--</div>-->
                    <!--<a href="//www.chuanke.com/course/____0_0_2.html" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<ul class="i_list clearfix">-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/7710221-201543.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/course/2016-11/15/9625d6ec1f8dccb0807208f2a9377ce3.thumb.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/7710221-201543.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--零基础旅游法语								</a>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/4105055-161063.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/course/2016-08/18/7187ca7a551466b005ef7fd954250f6c.thumb.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/4105055-161063.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--java基础精讲								</a>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1960305-140546.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/ecf596dea40b5c74d242378bd62f316a.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/1960305-140546.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--时尚穿搭教程								</a>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/1312939-138082.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/f088384396d2de360e98a19d5c13eb67.jpg">-->
                            <!--</a>-->
                        <!--</div>-->
                        <!--<div class="c_name">-->
                            <!--<a href="//www.chuanke.com/1312939-138082.html" target="_blank" kk-event-id="594" kk-event-ext="pid=104&amp;display=153">-->
                                <!--学唱日语歌曲								</a>-->
                        <!--</div>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</section>-->
            <!--&lt;!&ndash; 免费课 End &ndash;&gt;-->

            <!--<section class="index_item1 mb20">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">IT/互联网/技能</span>-->
                    <!--<div class="t_sort">-->
                        <!--<a href="//www.chuanke.com/course/72351176527446016______2.html" target="_blank">编程</a>&nbsp;&nbsp;-->
                        <!--<a href="//www.chuanke.com/course/72351236656988160______.html" target="_blank">设计</a>&nbsp;&nbsp;-->
                        <!--<a href="//www.chuanke.com/course/72351202297249792______.html" target="_blank">移动开发</a>-->
                    <!--</div>-->
                    <!--<a href="http://zt.chuanke.com/2015/it" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<div class="list_wrap">-->
                    <!--<ul class="i_list clearfix">-->
                        <!--<li class="lst1">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/2260700-174365.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/5e3982b20f8824375a4f196c4cfe56c9.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/2260700-174365.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--ThinkPHP5.0第一季										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">32</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1.1万</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>40.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst2">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/4928757-189655.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-09/10/fa820aa96a790e2b67d73dde2b557079.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/4928757-189655.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--Axure RP 8.0 基础篇										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">137</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1128</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>109.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst3">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/4858893-172765.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-05/03/efb24978ce014329021bd904b9561926.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/4858893-172765.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--高级运维之shell编程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">38</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1075</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>11.99</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst4">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/2880572-171607.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/8468a3c9e60d62ab8bb793fc024c53a9.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/2880572-171607.html" target="_blank" kk-event-id="489" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--spss modeler数据挖掘教程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">18</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">347</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>86.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->
            <!--<section class="index_item1 mb20">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">职场/理财/外语</span>-->
                    <!--<div class="t_sort">-->
                        <!--<a href="//www.chuanke.com/course/72367660611928064_____.html" target="_blank">办公软件</a>&nbsp;&nbsp;<a href="//www.chuanke.com/course/72362171643723776_____.html" target="_blank">求职面试</a>&nbsp;&nbsp;-->
                        <!--<a href="//www.chuanke.com/course/72354462177427456_____.html" target="_blank">外语技能</a>-->
                    <!--</div>-->
                    <!--<a href="//www.chuanke.com/course/72362158758821888_____.html" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<div class="list_wrap">-->
                    <!--<ul class="i_list clearfix">-->
                        <!--<li class="lst1">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/3392854-185914.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/813b808f27037ec9ec9e408619a85da6.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/3392854-185914.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--数据图表高效制作实例篇										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">25</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">5118</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>69.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst2">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/3181566-197099.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/65e353cbe2de5fff01aadd925dfb5c7f.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/3181566-197099.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--新英语900句基础篇										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">60</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1394</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>9.90</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst3">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/3572048-151055.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/2fc743ae89ed6a79f092f8cc2df13161.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/3572048-151055.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--学会日本人最常用的口语										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">12</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">2807</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>30.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst4">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/1344269-166975.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/fragment/457d831e7f0d5b42e9dbe633086b09d7.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/1344269-166975.html" target="_blank" kk-event-id="490" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--明哥聊求职										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">32</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1543</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->
            <!--<section class="index_item1 mb20">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">考试/考级/考证</span>-->
                    <!--<div class="t_sort">-->
                        <!--<a href="http://zt.chuanke.com/2015/kaoshikaoji#a1" target="_blank">财会金融</a>&nbsp;&nbsp;<a href="http://zt.chuanke.com/2015/kaoshikaoji#a3" target="_blank">英语入门</a>&nbsp;&nbsp;<a href="http://zt.chuanke.com/2015/kaoshikaoji" target="_blank">热门考试</a>&nbsp;&nbsp;-->
                    <!--</div>-->
                    <!--<a href="http://zt.chuanke.com/2015/kaoshikaoji" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<div class="list_wrap">-->
                    <!--<ul class="i_list clearfix">-->
                        <!--<li class="lst1">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/6704627-182655.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-10/12/d35caac19bbaea00dc895ff81a974d60.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/6704627-182655.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--集训冲刺托福写作课堂										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">25</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">430</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>99.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst2">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/1879267-173206.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-05/06/b3bd078c142809e34f1d5f53c9c22d75.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/1879267-173206.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--2016年英语四六级考试课程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">30</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1.1万</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst3">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/1879267-106409.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/dxt/./1409173623_43244.thumb.jpeg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/1879267-106409.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--会计证《财经法规》(2016版)										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">12</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">2.7万</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst4">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/1752112-199707.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-11/05/edb69ec7a7cda6c30bdb92bcf85c7530.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/1752112-199707.html" target="_blank" kk-event-id="491" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--2017考研英语一课程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">51</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">3807</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->
            <!--<section class="index_item1">-->
                <!--<div class="i_title clearfix"><span class="t_txt fl">生活/文化/兴趣</span>-->
                    <!--<div class="t_sort">-->
                        <!--<a href="//www.chuanke.com/course/72364366439120896_____.html" target="_blank">摄影</a>&nbsp;&nbsp;<a href="//www.chuanke.com/course/72364366590115840_____.html" target="_blank">星座</a>&nbsp;&nbsp;-->
                        <!--<a href="//www.chuanke.com/course/72364374961946624_____.html" target="_blank">生活技巧</a>-->
                    <!--</div>-->
                    <!--<a href="//www.chuanke.com/course/72364357782077440_____.html" target="_blank" class="t_more fr">更多</a></div>-->
                <!--<div class="list_wrap">-->
                    <!--<ul class="i_list clearfix">-->
                        <!--<li class="lst1">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/6853782-200958.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-12/04/fd35976db3802e9b66a1c07e1caed3df.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/6853782-200958.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--成人钢琴兴趣弹奏1000首全套教程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">12</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">2882</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst2">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/7470056-202791.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-11/26/f4c7c75307539fffff11f010c353376c.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/7470056-202791.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--吉他系统技巧										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">31</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">1034</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>5.00</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst3">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/7651648-205935.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-12/15/6473603f548be03c11b7a23f5dd1933c.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/7651648-205935.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--滴胶手镯DIY										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">2</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">16</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="num"><em class="money">¥</em>6.90</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="lst4">-->
                            <!--<div class="picTxt">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/5744079-204510.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//wsimg.chuanke.com/course/2016-12/05/da6517f6af243e485365eb5ab6d44c83.thumb.jpg">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="c_right">-->
                                    <!--<div class="c_name">-->
                                        <!--<a href="//www.chuanke.com/5744079-204510.html" target="_blank" kk-event-id="492" kk-event-ext="pid=104&amp;display=153">-->
                                            <!--素描零基础视频教程										</a>-->
                                    <!--</div>-->
                                    <!--<div class="c_detail">-->
                                        <!--<span class="les_counts mr25"><i class="c_1ab177">50</i>课时</span>-->
                                        <!--<span class="stu_counts"><i class="c_1ab177">3379</i>次学习</span>-->
                                    <!--</div>-->
                                    <!--<span class="free">免费</span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->
        <!--</div>-->
        <!--<div class="fr">-->

            <!--&lt;!&ndash; Start 预留广告位 &ndash;&gt;-->
            <!--<div class="index-side-ad">-->
                <!--<a href="//www.chuanke.com/v1960305-166236-754012.html?statistics_channel_id=2175&amp;statistics_uid=55" target="_blank"><img src="//wsimg.chuanke.com/fragment/e90f2c346799d55efec71ae38398e144.jpg"></a>-->
            <!--</div>            <div class="index-side-ad">-->
            <!--<a href="//www.chuanke.com/v2057689-186697-1035402.html?statistics_channel_id=2174&amp;statistics_uid=55" target="_blank"><img src="//wsimg.chuanke.com/fragment/9075ee4c6de3f390149b293a22aa8777.jpg"></a>-->
        <!--</div>-->

            <!--&lt;!&ndash; End 预留广告位 &ndash;&gt;-->

            <!--&lt;!&ndash; =E 网络直播公开课 &ndash;&gt;-->
            <!--<section class="index_side index_side_zb">-->
                <!--<div class="s_title">-->
                    <!--<span class="s_txt fl">最近直播课</span>-->
                    <!--<a class="s_more fr" target="_blank" href="//www.chuanke.com/course/__prelectstarttime-prelectstarttime_asc___2.html" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">更多</a>-->
                <!--</div>-->
                <!--<div class="zb_wrap">-->
                    <!--<ul class="zb_list">-->
                        <!--<li class="zb_head zb">直播中</li>-->
                        <!--<li>-->
                            <!--<span class="time">13:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/2659288-188093.html" title="吴昊物理咨询解惑" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">吴昊物理咨询解惑</a></span>-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--<ul class="zb_list">-->
                        <!--<li class="zb_head">今天</li>-->
                        <!--<li>-->
                            <!--<span class="time">17:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/1644477-190699.html" title="少儿英语演讲与口才培训" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">少儿英语演讲与口才培训</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">17:15</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/6463299-205603.html" title="amc美国数学竞赛培训" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">amc美国数学竞赛培训</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">18:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/3373360-202312.html" title="添翼ISPN CGFNS RN12月份直播课程 基础词汇+专业课程" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">添翼ISPN CGFNS RN12月份直播课程 基础词汇+专业课程</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">19:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/4279802-149177.html" title="PS 零基础淘宝美工养成记" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">PS 零基础淘宝美工养成记</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">19:20</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/1660343-180022.html" title="奕爸儿童英语16年下半年《Peppa Pig》直播课中小学生英语" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">奕爸儿童英语16年下半年《Peppa Pig》直播课中小学生英语</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">19:30</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/1879267-198231.html" title="中级会计实务" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">中级会计实务</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/6423860-202164.html" title="法语9000词汇大突破第二期" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">法语9000词汇大突破第二期</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/4279802-138451.html" title="PS 零基础入门到精通VIP初级班" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">PS 零基础入门到精通VIP初级班</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/4023279-179487.html" title="大数据快速入门到核心技术项目实战（0基础学习）" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">大数据快速入门到核心技术项目实战（0基础学习）</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/2682317-206260.html" title="室内设计风水谈单设计高级课程" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">室内设计风水谈单设计高级课程</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:30</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/1871288-206631.html" title="七年级期末总复习：一元一次方程的应用" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">七年级期末总复习：一元一次方程的应用</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">20:45</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/1644477-181910.html" title="一对一从零开始学口语" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">一对一从零开始学口语</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">21:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/4760865-181076.html" title="【6080教育】2017年二建   《法规及相关知识》 免费直播精讲班" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">【6080教育】2017年二建   《法规及相关知识》 免费直播精讲班</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">21:00</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/7190372-188220.html" title="成人英语听说" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">成人英语听说</a></span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<span class="time">21:30</span>-->
                            <!--<span class="c_name"><a href="//www.chuanke.com/4279802-140472.html" title="PS高级教程精英实战VIP特训班" target="_blank" class="clearfix" kk-event-id="494" kk-event-ext="pid=104&amp;display=153">PS高级教程精英实战VIP特训班</a></span>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->

            <!--&lt;!&ndash; =S 热门学校/学校排行 &ndash;&gt;-->
            <!--<section class="index_side index_side_phb">-->
                <!--<div class="s_title">-->
                    <!--<ul class="tabs" id="toplistTab">-->
                        <!--<li class="curr first" tid="1">热门学校</li>-->
                        <!--<li tid="2">学校排行</li>-->
                    <!--</ul>-->
                <!--</div>-->
                <!--<div class="cons">-->
                    <!--<div class="cons_sub pb10" id="toplist_1">-->
                        <!--<ul class="school_list">-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1244516.html" target="_blank" title="文鼎电脑学校" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/ab/bc/1244516_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">1</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1244516.html" target="_blank" title="文鼎电脑学校" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">文鼎电脑学校</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s7394102.html" target="_blank" title="99微课" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/6c/9d/7394102_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">2</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s7394102.html" target="_blank" title="99微课" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">99微课</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1879267.html" target="_blank" title="对啊网百度旗舰店" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/2e/f5/1879267_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">3</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1879267.html" target="_blank" title="对啊网百度旗舰店" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">对啊网百度旗舰店</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1205351.html" target="_blank" title="我赢职场" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/d1/79/1205351_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1205351.html" target="_blank" title="我赢职场" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">我赢职场</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1018455.html" target="_blank" title="互联网技术就业速成班" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/e4/c5/1018455_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1018455.html" target="_blank" title="互联网技术就业速成班" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">互联网技术就业速成班</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                        <!--</ul>-->
                        <!--<p class="pMore pr20"><a class="c_999" target="_blank" href="//www.chuanke.com/?mod=school&amp;act=toplist&amp;type=recently" kk-event-id="495" kk-event-ext="pid=104&amp;display=153">查看更多学校排名&gt;&gt;</a></p>-->
                    <!--</div>-->
                    <!--<div class="cons_sub pb10" style="display:none" id="toplist_2">-->
                        <!--<ul class="school_list">-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1018455.html" target="_blank" title="互联网技术就业速成班">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/e4/c5/1018455_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">1</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1018455.html" target="_blank" title="互联网技术就业速成班">互联网技术就业速成班</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1244516.html" target="_blank" title="文鼎电脑学校">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/ab/bc/1244516_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">2</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1244516.html" target="_blank" title="文鼎电脑学校">文鼎电脑学校</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1960305.html" target="_blank" title="多学多用">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/2e/f5/1960305_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                    <!--<span class="c_count">3</span>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1960305.html" target="_blank" title="多学多用">多学多用</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1920094.html" target="_blank" title="文都教育">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/2e/f8/1920094_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1920094.html" target="_blank" title="文都教育">文都教育</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                            <!--<li class="clearfix">-->
                                <!--<div class="pic">-->
                                    <!--<a href="//www.chuanke.com/s1879267.html" target="_blank" title="对啊网百度旗舰店">-->
                                        <!--<img src="//www.chuanke.com//upload/logo/2e/f5/1879267_small.jpg?t=1482742037">-->
                                    <!--</a>-->
                                <!--</div>-->
                                <!--<div class="detail">-->
                                    <!--<p class="s_name"><a href="//www.chuanke.com/s1879267.html" target="_blank" title="对啊网百度旗舰店">对啊网百度旗舰店</a></p>-->
                                    <!--<p class="s_intro"></p>-->
                                <!--</div>-->
                            <!--</li>-->
                        <!--</ul>-->
                        <!--<p class="pMore pr20"><a class="c_999" target="_blank" href="//www.chuanke.com/?mod=school&amp;act=toplist">查看更多学校排名&gt;&gt;</a></p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</section>-->
            <!--<section class="index_side index_side_hzhb"><div class="s_title">-->
                <!--<span class="s_txt fl">最新合作伙伴</span>-->
                <!--<a href="/?mod=search&amp;act=school" target="_blank" class="fr s_more">更多</a>-->
            <!--</div>-->
                <!--<ul class="parter_list1 clearfix">-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s6512499.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//www.chuanke.com/upload/logo/b6/d0/6512499_big.jpg" alt="橡果学院" width="100" height="100" class="pic">        </a>-->
                        <!--<p class="txt"><a href="//www.chuanke.com/s6512499.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">橡果学院</a></p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s4897262.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//www.chuanke.com/upload/logo/bd/17/4897262_big.jpg" alt="社科赛斯" width="100" height="100" class="pic">        </a>-->
                        <!--<p class="txt"><a href="//www.chuanke.com/s4897262.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">社科赛斯</a></p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s2388406.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//www.chuanke.com//upload/logo/dc/90/2388406_big.jpg" alt="格致教育" width="100" height="100" class="pic">        </a>-->
                        <!--<p class="txt"><a href="//www.chuanke.com/s2388406.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">格致教育</a></p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s7715679.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//www.chuanke.com//upload/logo/b7/2e/7715679_big.jpg" alt="白熊求职" width="100" height="100" class="pic">        </a>-->
                        <!--<p class="txt"><a href="//www.chuanke.com/s7715679.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">白熊求职</a></p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s1312939.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//wsimg.chuanke.com/fragment/c8417062dba61e7ec660552e400baff1.jpg" alt="海贝日语" width="100" height="100" class="pic">        </a>-->
                        <!--<p class="txt"><a href="//www.chuanke.com/s1312939.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">海贝日语</a></p>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="//www.chuanke.com/s1405487.html" target="_blank" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">-->
                            <!--<img src="//wsimg.chuanke.com/fragment/56994f36b80faa9109775e9fa58b3459.jpg" alt="Techer L" width="100" height="100" class="pic"></a>-->
                        <!--<p class="txt"><a target="_blank" href="//www.chuanke.com/s1405487.html" kk-event-id="496" kk-event-ext="pid=104&amp;display=153">Techer L</a></p>-->
                    <!--</li>-->

                <!--</ul>-->
                <!--<s class="clearfix"></s></section>-->

            <!--<section class="index_side index_side_mxjs"><div class="s_title">-->
                <!--<span class="s_txt fl">明星讲师</span>-->
            <!--</div>-->
                <!--<ul class="teacher_list">-->
                    <!--<li class="clearfix">-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/s2388406.html" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/bfdfa36b2036c94ecb5c44cbdb0c9f82.jpg" alt="刘杰" width="50" height="50">            </a>        </div>-->
                        <!--<div class="detail">-->
                            <!--<p class="t_name">-->
                                <!--<a href="//www.chuanke.com/s2388406.html" class="" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                    <!--刘杰-格致教育-->
                                <!--</a>-->
                            <!--</p>-->
                            <!--<p class="t_intro">跟清华状元，得物理高分。</p>-->
                        <!--</div>-->
                    <!--</li>-->

                    <!--<li class="clearfix">-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/s1230924.html" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/b4ab808524e2a7ff6ad02dd986561db3.jpg" alt="乐学医考-中医田磊博士" width="50" height="50">            </a>        </div>-->
                        <!--<div class="detail">-->
                            <!--<p class="t_name">-->
                                <!--<a href="//www.chuanke.com/s1230924.html" class="" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                    <!--乐学医考-中医田磊博士-->
                                <!--</a>-->
                            <!--</p>-->
                            <!--<p class="t_intro">乐学医考教学总监，医考培训顶级名师！</p>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li class="clearfix">-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/s1013047.html" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/2c99a179083864031ee5f568f51ad82c.jpg" alt="刘祯" width="50" height="50">            </a>        </div>-->
                        <!--<div class="detail">-->
                            <!--<p class="t_name">-->
                                <!--<a href="//www.chuanke.com/s1013047.html" class="" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                    <!--刘祯干-ACE英语网校-->
                                <!--</a>-->
                            <!--</p>-->
                            <!--<p class="t_intro">手绘影视趣味学英语的倡导者。</p>-->

                        <!--</div>-->
                    <!--</li>-->
                    <!--<li class="clearfix">-->
                        <!--<div class="pic">-->
                            <!--<a href="//www.chuanke.com/s1244516.html" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                <!--<img src="//wsimg.chuanke.com/fragment/8b97b95c9f59d5d47ccd5455a487af60.png" alt="应登奎" width="50" height="50">            </a>        </div>-->
                        <!--<div class="detail">-->
                            <!--<p class="t_name">-->
                                <!--<a href="//www.chuanke.com/s1244516.html" class="" target="_blank" kk-event-id="497" kk-event-ext="pid=104&amp;display=153">-->
                                    <!--应登奎-文鼎电脑学校-->
                                <!--</a>-->
                            <!--</p>-->
                            <!--<p class="t_intro">8年设计行业经验，12年教学积累！</p>-->
                        <!--</div>-->
                    <!--</li>-->

                <!--</ul>-->
                <!--<s class="clearfix"></s></section>-->
        <!--</div>-->
    <!--</div>-->
    <!--主体内容 结束-->
    <hr width="100%">
    <!--footer尾部 开始-->
    <!--<include file="./Application/Home/View/index/footer.html">-->
    <!--<footer class="footer">-->
        <!--<div class="ft_friendlinks">-->
            <!--<dl class="flink">-->
                <!--<dt class="tit">友情链接：</dt>-->
                <!--<dd class="con">-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">中华人民共和国教育部</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">北京市教委</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">美国留学</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">知好乐网校</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">在线英语培训</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">公务员考试网</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">坦途教育网</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">博浪网</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">智康1对1</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">学习方法网</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">在线考试中心</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">时代学习网</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">大耳朵英语</a>-->
                    <!--<a href="" target="_blank" kk-event-id="499" kk-event-ext="pid=104&amp;display=153">尚友网</a>-->
                <!--</dd>-->
            <!--</dl>-->
        <!--</div>-->
        <!--<nav class="ft_nav">-->
            <!--<a href="" target="_blank">关于在线考试</a>-->
            <!--<a href="" target="_blank">在线帮助</a>-->
            <!--<a href="" target="_blank">投诉&amp;反馈</a>-->
            <!--<a href="" target="_blank">联系方式</a>-->
            <!--<a href="" target="_blank">招聘信息</a>-->
            <!--<a href="">手机触屏版</a>-->
        <!--</nav>-->
        <!--<div class="copyright">-->
            <!--<p class="info">-->
                <!--<span class="mr10">京ICP证<a href="http://www.miitbeian.gov.cn" target="_blank">130265</a>号</span>-->
                <!--<span class="mr10">Copyright © 2016 <a href="" target="_blank">使用在线考试前必读</a></span>-->
                <!--<span>在线考试<a target="_blank" href="">kaoshi.com</a></span>-->
            <!--</p>-->
        <!--</div>-->
    <!--</footer>-->
    <!--footer尾部 结束-->
</body>
</html>